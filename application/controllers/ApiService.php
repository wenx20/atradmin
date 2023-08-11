<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ApiService extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Methods: GET");
		$this->load->model('Master_model', 'mastermod');
	}

	function index()
	{
		header("location: http://localhost:8000/pospbb/beranda/", true, 301);
		exit();
	}

	function tunggakan()
	{
		$data   = json_decode(file_get_contents('php://input'));
		$nop    = $data->NOP;

		$data = $this->mastermod->getPbb($nop);
		$jml = $data->num_rows();

		if ($jml > 0) {
			$today = strtotime(date('Y/m/d'));

			$dataOP = $this->mastermod->getOP($nop)->result_array();
			foreach ($dataOP as $op) {
				$jalan = $op['JALAN_OP'];
				$blok_op = 	$op['BLOK_KAV_NO_OP'];
				$rw_op = $op['RW_OP'];
				$rt_op = $op['RT_OP'];
			}

			$result_op = [
				'jalan_op' => $jalan,
				'blok_op' => $blok_op,
				'rw_op' => $rw_op,
				'rt_op' => $rt_op
			];

			foreach ($data->result_array() as $row) :
				$tgl_jatuh_tempo = strtotime($row['TGL_JATUH_TEMPO_SPPT']);
				$awal = (date("Y", $tgl_jatuh_tempo) * 12) + date("n", $tgl_jatuh_tempo);
				$akhir = (date("Y", $today) * 12) + date("n", $today);
				$jml_bulan = $akhir - $awal;

				if ($row['TAHUN'] == date('Y')) {
					$denda = 0;
					$totbayar = $row['PBB_YG_HARUS_DIBAYAR_SPPT'];
				} else {
					if ($jml_bulan == 0) {
						$denda = 0;
						$totbayar = $row['PBB_YG_HARUS_DIBAYAR_SPPT'];
					} else if ($jml_bulan < 24) {
						$denda = $jml_bulan * (2 / 100) * $row['PBB_YG_HARUS_DIBAYAR_SPPT'];
						$totbayar = $row['PBB_YG_HARUS_DIBAYAR_SPPT'] + $denda;
					} else {
						$denda = (48 / 100) * $row['PBB_YG_HARUS_DIBAYAR_SPPT'];
						$totbayar = $row['PBB_YG_HARUS_DIBAYAR_SPPT'] + $denda;
					}
				}

				$result[] = [
					'nama_wp' => $row['NM_WP_SPPT'],
					'alamat_wp' => $row['JLN_WP_SPPT'] . " " . $row['BLOK_KAV_NO_WP_SPPT'] . " RT/RW " . $row['RT_WP_SPPT'] . "/" . $row['RW_WP_SPPT'] . " " . $row['KELURAHAN_WP_SPPT'] . " " . $row['KOTA_WP_SPPT'],
					'tahun' => $row['THN_PAJAK_SPPT'],
					'pbb_pokok' => (float)$row['PBB_YG_HARUS_DIBAYAR_SPPT'],
					'denda' => ceil($denda)
				];
			endforeach;
		} else {
			$result['result'] = "Data tidak ditemukan";
		}

		$data = [
			'alamat_op' => $result_op,
			'data_tunggakan' => $result
		];
		echo json_encode($data);
	}
	/* PPH */
	function pph()
	{
		$data   = json_decode(file_get_contents('php://input'));
		$npwp    = $data->NPWP;

		$data = $this->mastermod->getPph($npwp);
		$jml = $data->num_rows();

		if ($jml > 0) {

			foreach ($data->result_array() as $row) :
				$result[] = [
					'npwp' => $row['NPWP'],
					'nik' => $row['NIK'],
					'name' => $row['NAME'],
					'year' => $row['YEAR'],
					'nincome' => $row['NET_INCOME'],
					'tasset' => $row['TOTAL_ASSET'],
					'tliabiliti' => $row['TOTAL_LIABILITIES']
				];
			endforeach;
		} else {
			$result['result'] = "Data tidak ditemukan";
		}

		$data = [
			'dataWP' => $result
		];
		echo json_encode($data);
	}
	/* END PPH */
}
