<div class="row">
	<div class="col-md-6">

		<!-- START VALIDATIONENGINE PLUGIN -->
		<div class="block">
			<h4>Validation Engine</h4>
			<form id="validate" role="form" class="form-horizontal"
				action="javascript:alert('Form #validate submited');">
				<div class="form-group">
					<label class="col-md-3 control-label">Login:</label>
					<div class="col-md-9">
						<input type="text"
							class="validate[required,maxSize[8]] form-control" /> <span
							class="help-block">Required, max size = 8</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Password:</label>
					<div class="col-md-9">
						<input type="password"
							class="validate[required,minSize[5],maxSize[10]] form-control"
							id="password" /> <span class="help-block">Required, min size = 5,
							max size = 10</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Confirm:</label>
					<div class="col-md-9">
						<input type="password"
							class="validate[required,equals[password]] form-control" /> <span
							class="help-block">Required, equals Password</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Age:</label>
					<div class="col-md-9    ">
						<input type="text"
							class="validate[required,custom[integer],min[18],max[120]] form-control" />
						<span class="help-block">Required, integer, min value = 18, max =
							120</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Gender:</label>
					<div class="col-md-3">
						<select class="validate[required] select" id="formGender">
							<option value="">Choose option</option>
							<option value="1">Male</option>
							<option value="0">Female</option>
						</select> <span class="help-block">Required</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Date of birth:</label>
					<div class="col-md-9">
						<input type="text"
							class="validate[required,custom[date]] form-control" /> <span
							class="help-block">Required, date YYYY-MM-DD</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Credit card:</label>
					<div class="col-md-9">
						<input type="text"
							class="validate[required,creditCard] form-control" /> <span
							class="help-block">Required, credit card number</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Site:</label>
					<div class="col-md-9">
						<input type="text" value="http://"
							class="validate[required,custom[url]] form-control" /> <span
							class="help-block">Required, url</span>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label class="checkbox"> <label> <input type="checkbox"
								class="validate[required]" name="terms" value="1" /> Yes, I
								accept your terms and conditions.
						</label>
						</label>
					</div>
				</div>
				<div class="btn-group pull-right">
					<button class="btn btn-primary" type="button"
						onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
					<button class="btn btn-primary" type="submit">Submit</button>
				</div>
			</form>
		</div>
		<!-- END VALIDATIONENGINE PLUGIN -->

	</div>
	<div class="col-md-6">

		<!-- START JQUERY VALIDATION PLUGIN -->
		<div class="block">
			<h4>jQuery Validation</h4>
			<form id="jvalidate" role="form" class="form-horizontal"
				action="javascript:alert('Form #validate2 submited');">
				<div class="panel-body">
					<div class="form-group">
						<label class="col-md-3 control-label">Login:</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="login" /> <span
								class="help-block">min size = 2, max size = 8</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Password:</label>
						<div class="col-md-9">
							<input type="password" class="form-control" name="password"
								id="password2" /> <span class="help-block">min size = 5, max
								size = 10</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Confirm Password:</label>
						<div class="col-md-9">
							<input type="password" class="form-control" name="re-password" />
							<span class="help-block">required same value as Password</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">E-mail:</label>
						<div class="col-md-9">
							<input type="text" value="" name="email" class="form-control" />
							<span class="help-block">required email</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Age:</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="age" /> <span
								class="help-block">min size = 18, max size = 100</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Date of birth:</label>
						<div class="col-md-9">
							<input type="text" class="form-control datepicker" name="date" />
							<span class="help-block">required date</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Credit card:</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="credit" /> <span
								class="help-block">required credit card</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Site:</label>
						<div class="col-md-9">
							<input type="text" value="http://" name="site"
								class="form-control" /> <span class="help-block">required url</span>
						</div>
					</div>
					<div class="btn-group pull-right">
						<button class="btn btn-primary" type="button"
							onClick="jvalidate.resetForm();$('#gender').next('.bootstrap-select').removeClass('error').removeClass('valid')">Hide
							prompts</button>
						<button class="btn btn-primary" type="submit">Submit</button>
					</div>
				</div>
			</form>
			<!-- END JQUERY VALIDATION PLUGIN -->
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">

		<!-- START MASKED INPUT PLUGIN -->
		<div class="block">
			<h4>Masked Input</h4>
			<form class="form-horizontal" role="form">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-md-3 control-label">Date:</label>
						<div class="col-md-9">
							<input type="text" class="mask_date form-control" value="" /> <span
								class="help-block">Example: 2012-12-21</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Phone:</label>
						<div class="col-md-9">
							<input type="text" class="mask_phone form-control" value="" /> <span
								class="help-block">Example: 98 (765) 432-10-98</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Phone + Ext:</label>
						<div class="col-md-9">
							<input type="text" class="mask_phone_ext form-control" value="" />
							<span class="help-block">Example: 98 (765) 432-10-98 x9999</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Credit:</label>
						<div class="col-md-9">
							<input type="text" class="mask_credit form-control" value="" /> <span
								class="help-block">Example: 9876-5432-1098-7654</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-md-3 control-label">TIN:</label>
						<div class="col-md-9">
							<input type="text" class="mask_tin form-control" value="" /> <span
								class="help-block">Example: 98-7654321</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">SSN:</label>
						<div class="col-md-9">
							<input type="text" class="mask_ssn form-control" value="" /> <span
								class="help-block">Example: 987-65-4321</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Product:</label>
						<div class="col-md-9">
							<input type="text" class="mask_product form-control" value="" />
							<span class="help-block">Example: A1-234-B567</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Percent:</label>
						<div class="col-md-9">
							<input type="text" class="mask_percent form-control" value="" />
							<span class="help-block">Example: 50%</span>
						</div>
						<div class="common-modal modal fade" id="common-Modal1"
							tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-content">
								<ul class="list-inline item-details">
									<li><a
										href="http://themifycloud.com/downloads/janux-premium-responsive-bootstrap-admin-dashboard-template/">Admin
											templates</a></li>
									<li><a href="http://themescloud.org">Bootstrap themes</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!-- END MASKED INPUT PLUGIN -->

	</div>
</div>