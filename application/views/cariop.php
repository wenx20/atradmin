						<!-- PAGE CONTENT BEGINS -->
						<div class="center">
							<div class="page-header">
								<h1>
									Input NOP
									<small>
										<i class="ace-icon fa fa-angle-double-right"></i>
										Masukan Nomor Objek Pajak
									</small>
								</h1>
							</div><!-- /.page-header -->
							<form method="get" class="form-horizontal" role="form" action="<?= base_url(); ?>home/prosesop">
								<input name="kdprop" style=width:100px; type="text" id="form-field-5" maxlength="2" placeholder="KD PROP" autofocus onkeyup="checkField(this.form, this)" onkeypress="return Angka(event)" />
								<input name="kddt2" style=width:100px; type="text" id="form-field-5" maxlength="2" placeholder="KD DT2" onkeyup="checkField(this.form, this)" onkeypress="return Angka(event)" />
								<input name="kdkec" style=width:100px; type="text" id="form-field-5" maxlength="3" placeholder="KD KEC" onkeyup="checkField(this.form, this)" onkeypress="return Angka(event)" />
								<input name="kdkel" style=width:100px; type="text" id="form-field-5" maxlength="3" placeholder="KD KEL" onkeyup="checkField(this.form, this)" onkeypress="return Angka(event)" />
								<input name="kdbl" style=width:100px; type="text" id="form-field-5" maxlength="3" placeholder="KD BLOK" onkeyup="checkField(this.form, this)" onkeypress="return Angka(event)" />
								<input name="nourut" style=width:100px; type="text" id="form-field-5" maxlength="4" placeholder="NO URUT" onkeyup="checkField(this.form, this)" onkeypress="return Angka(event)" />
								<input name="kdop" style=width:100px; type="text" id="form-field-5" maxlength="1" placeholder="KD OP" onkeyup="checkField(this.form, this)" onkeypress="return Angka(event)" />
								<div class="clearfix form-actions">
									<div class="col-md-offset-3 col-md-6">
										<button class="btn btn-info" type="submit">
											<i class="ace-icon fa fa-check bigger-110"></i>
											Submit
										</button>

										&nbsp; &nbsp; &nbsp;
										<button class="btn" type="reset">
											<i class="ace-icon fa fa-undo bigger-110"></i>
											Reset
										</button>
									</div>
								</div>
							</form>
						</div>
						<script>
							function checkField(formObj, fldObj) {
								for (i = 0; i < formObj.length; i++)
									if (formObj[i] == fldObj)
										if (fldObj.value.length == parseInt(fldObj.maxLength)) {
											if (i < formObj.length - 1)
												fldObj = formObj[++i];
											fldObj.focus();
										}
							}

							function Angka(evt) {
								var charCode = (evt.which) ? evt.which : event.keyCode
								if (charCode > 31 && (charCode < 48 || charCode > 57))

									return false;
								return true;
							}
						</script>