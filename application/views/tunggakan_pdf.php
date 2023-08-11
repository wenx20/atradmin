<?php
    $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
    $pdf->SetTitle('Data Tunggakan');
    $pdf->SetTopMargin(20);
    $pdf->setFooterMargin(20);
    $pdf->SetAutoPageBreak(true);
    $pdf->SetAuthor('Author');
    $pdf->SetDisplayMode('real', 'default');
    $pdf->AddPage();

	foreach ($fdop->result() as $row){
		$jlop = $row->JALAN_OP;
		$rwop = $row->RW_OP;
		$rtop = $row->RT_OP;
	}
	
	foreach ($fwil->result() as $rx){
		$nmdati2 = $rx->NM_DATI2;
		$nmkec = $rx->NM_KECAMATAN;
		$nmkel = $rx->NM_KELURAHAN;
		}
									
	foreach ($fsppt->result() as $r){
		$nmwp = $r->NM_WP_SPPT;
		$jlwp = $r->JLN_WP_SPPT;
		$blwp = $r->BLOK_KAV_NO_WP_SPPT;
		$klwp = $r->KELURAHAN_WP_SPPT;
		$kotawp = $r->KOTA_WP_SPPT;
		
		$alamatwp = $jlwp.' '.$blwp;
	}									
	
	$html = '<div style="font-size: 10px;">NOP : '.$nop.'</div> <br />';
	$html .= '<table border="0" width="100%" cellpadding="2" cellspacing="0" style="font-size: 10px; ">
				<tr>
					<td style="background-color: #e1e1e1; " width="42%">LETAK OBJEK PAJAK </td>
					<td width="5%"></td>
					<td style="background-color: #e1e1e1; " width="43%">DATA WAJIB PAJAK </td>
				</tr>
				<tr>
					<td>
					'.$jlop.' <br />
					RT/ RW : '.$rtop.'/'.$rwop.' <br />
					'.$nmkel.' <br />
					'.$nmkec.' <br />
					'.$nmdati2.'
					</td>
					<td></td>
					<td width="50%">
					'.$nmwp.' <br />
					'.$jlwp.' <br />
					'.$klwp.' <br />
					'.$kotawp.'
					</td>
				</tr>
			</table>
			<br />
			';
	$html .= '<div>Data Tunggakan SPPT</div>';
	$html .= '
			<table border="1" width="100%" cellpadding="2" cellspacing="0" style="font-size: 10px;">
					<tr align="center" style="background-color: #e1e1e1; ">
						<th width="8%">No</th>
						<th>PBB POKOK</th>
						<th>DENDA</th>
						<th>POKOK + DENDA</th>
						<th>TAHUN PAJAK</th>
					</tr>
				<tbody>
				';
				
			$i=0;
			$total = 0;
			$totTunggakan = 0;
			$today = strtotime(date('Y/m/d'));
			foreach($fsppt->result_array() as $row) {
				$i++;
				
				$total = $total + $row['PBB_YG_HARUS_DIBAYAR_SPPT'];
				
				$tgl_jatuh_tempo = strtotime($row['TGL_JATUH_TEMPO_SPPT']);
				$awal = (date("Y", $tgl_jatuh_tempo) * 12) + date("n", $tgl_jatuh_tempo);
				$akhir = (date("Y", $today) * 12) + date("n", $today);
				$jml_bulan = $akhir - $awal;
				
				if($row['TAHUN'] == date('Y')){
					$denda = 0;
					$totbayar = $row['PBB_YG_HARUS_DIBAYAR_SPPT'];
				}else {
					if($jml_bulan == 0){
						$denda = 0;
						$totbayar = $row['PBB_YG_HARUS_DIBAYAR_SPPT'];
					}else if($jml_bulan < 24){
						$denda = $jml_bulan * (2 / 100) * $row['PBB_YG_HARUS_DIBAYAR_SPPT'];
						$totbayar = $row['PBB_YG_HARUS_DIBAYAR_SPPT'] + $denda;
					}else {
						$denda = (48 / 100) * $row['PBB_YG_HARUS_DIBAYAR_SPPT'];
						$totbayar = $row['PBB_YG_HARUS_DIBAYAR_SPPT'] + $denda;
					}
				}
				
				$totTunggakan = $totTunggakan + $totbayar;
				
				$html.='<tr bgcolor="#ffffff">
							<td align="center">'.$i.'</td>
							<td align="right">'.number_format($row['PBB_YG_HARUS_DIBAYAR_SPPT'], 0, ',','.').'</td>
							<td align="right">'.number_format(ceil($denda), 0, ',','.').'</td>
							<td align="right">'.number_format(($row['PBB_YG_HARUS_DIBAYAR_SPPT'] + $denda), 0, ',','.').'</td>
							<td align="center">'.$row['THN_PAJAK_SPPT'].'</td>
					</tr>';
			}
	$html .= '
					<tr>
						<td colspan="3" align="center">Total </td>
						<td align="right">'.number_format($totTunggakan, 0, ',','.').'</td>
						<td></td>
					</tr>
				</tbody>
			</table>
			';
		
	$pdf->writeHTML($html, true, false, true, false, '');
    $pdf->Output('tunggakan.pdf', 'I');
?>