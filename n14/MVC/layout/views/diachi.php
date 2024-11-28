<link href="public/css/thongtintk.css" rel="stylesheet" type="text/css" media="all" />

			<section class="bread-crumb">
	<div class="container">
		<ul class="breadcrumb">					
			<li class="home">
				<a href="/" title="Trang chủ"><span>Trang chủ</span></a>						
				<span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg>&nbsp;</span>
			</li>
			
			<li>
				<a href="/account" title="Tài khoản"><span>Tài khoản</span></a>
				<span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg>&nbsp;</span>
			</li>
			<li><strong><span>Địa chỉ khách hàng</span></strong></li>
			
		</ul>
	</div>
</section> 

<div class="op_address"></div>
<section class="address">
	<div class="container page_address margin-bottom-20">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-lg-3 col-left-ac">
				<div class="block-account bg-shadow">
					<h5 class="title-account">Trang tài khoản</h5>
					<?php
                    include_once 'Model/connectmodel.php';
                    $connectModel = new ConnectModel();
                    $query = "SELECT TenTK, VaiTro FROM taikhoan";
					$as ='';
                    $result = $connectModel->selectall($query);
                    foreach($result as $x) {
                     $as = '   <p>Xin chào, <span style="color:#8d251c;">'.$x['TenTK'].'</span>&nbsp;!</p>';
                    }
					echo $as
?>
					<ul>
						<li>
							<a disabled="disabled" class="title-info active" title="Thông tin tài khoản" href="index.php?trang=thongtintk&use=nhap">Thông tin tài khoản</a>
						</li>
						<li>
							<a class="title-info" href="index.php?trang=donhang&use=nhap" title="Đơn hàng của bạn">Đơn hàng của bạn</a>
						</li>
						<li>
							<a class="title-info" href="index.php?trang=doimk&use=nhap" title="Đổi mật khẩu">Đổi mật khẩu</a>
						</li>
						<li>
							<a class="title-info" href="index.php?trang=diachi&use=nhap" title="Sổ địa chỉ (0)">Địa chỉ (1)</a>
						</li>
						<li>
							<a class="title-info" href="index.php?trang=home" title="Đăng xuất">Đăng xuất</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-lg-9">
				<div class="bg-shadow">
                    <!-- xuat dataa ra day -->
					<h1 class="title-head">Địa chỉ của bạn</h1>

					<?php
                    include_once 'Model/connectmodel.php';
                    $connectModel = new ConnectModel();
                    $query = "SELECT * FROM taikhoan";
                    $result = $connectModel->selectall($query);
					$zx ='';
                    foreach($result as $x) {
                     $zx = '<div id="diachi">
                        <span>Ten: '.$x['TenTK'].'</span> <br><br>
                        <span>'.$x['diachi'].'</span>
                    </div><br>';
                    }
					echo $zx;
?>

                    
					<p class="btn-row">
						<button class="btn-edit-addr btn btn-primary btn-more" type="button" onclick="Bizweb.CustomerAddress.toggleNewForm(); return false;">Thêm địa chỉ</button> 							
					</p>
					<div id="add_address" class="form-list modal_address modal" style="height: 545px;">
						<div class="btn-close closed_pop"><span></span></div>
						<h2 class="title_pop">
							Thêm địa chỉ mới
						</h2> 
						<!-- <form method="post" action="/account/addresses" id="customer_address" accept-charset="UTF-8"><input name="FormType" type="hidden" value="customer_address"><input name="utf8" type="hidden" value="true">
						<div class="pop_bottom">
							<div class="form_address">
								<div class="field">
									<fieldset class="form-group">
										<input type="text" name="FullName" class="form-control" data-validation-error-msg="Không được để trống" required="" data-validation="required" value="" autocapitalize="words">
										<label>Họ tên* </label>
									</fieldset>
									<p class="error-msg"></p>
								</div>
								<div class="field">
									<fieldset class="form-group">
										<input type="number" class="form-control" id="Phone" pattern="\d+" name="Phone" required="" maxlength="12" value="">
										<label>Số điện thoại*</label>
									</fieldset>
								</div>
								<div class="field">
									<fieldset class="form-group">
										<input type="text" class="form-control" name="Company" value="">
										<label>Công ty</label>
									</fieldset>
								</div>

								<div class="field">
									<fieldset class="form-group select-field">
										<select name="Country" class="form-control vn-fix add has-content" id="mySelect1" required="" data-default="Việt Nam"><option value="Abkhazia">Abkhazia</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo-Brazzaville">Congo-Brazzaville</option><option value="Congo-Kinshasa">Congo-Kinshasa</option><option value="Costa Rica">Costa Rica</option><option value="Côte d'Ivoire">Côte d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan (Nippon)">Japan (Nippon)</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="North Korea">North Korea</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macedonia (FYROM)">Macedonia (FYROM)</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Nagorno-Karabakh">Nagorno-Karabakh</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="South Korea">South Korea</option><option value="New Caledonia">New Caledonia</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="South Sudan">South Sudan</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Saint Helena">Saint Helena</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option><option value="South Africa">South Africa</option><option value="South Ossetia">South Ossetia</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Tokelau">Tokelau</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="China">China</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican">Vatican</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Wales">Wales</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option><option value="Taiwan">Taiwan</option></select>
										<label>Quốc gia</label>
									</fieldset>
								</div>
								<div class="group-country">
									<fieldset class="form-group select-field not-vn">
										<select name="Province" value="" class="form-control add has-content" required="" id="mySelect2" data-address-type="province" data-address-zone="billing" data-select2-id="select2-data-billingProvince"></select>
										<label>Tỉnh thành*</label>
									</fieldset>
									<fieldset class="form-group select-field not-vn">
										<select name="District" class="form-control add has-content" value="" required="" id="mySelect3" data-address-type="district" data-address-zone="billing" data-select2-id="select2-data-billingDistrict"></select>
										<label>Quận huyện*</label>
									</fieldset>
									<fieldset class="form-group select-field not-vn">
										<select name="Ward" class="form-control add has-content" value="" required="" id="mySelect4" data-address-type="ward" data-address-zone="billing" data-select2-id="select2-data-billingWard"></select>
										<label>Phường xã*</label>
									</fieldset>
								</div>
								<div class="field">
									<fieldset class="form-group">
										<input type="text" class="form-control" required="" name="Address1" value="">
										<label>Địa chỉ*</label>
									</fieldset>
								</div>
								<div class="field">
									<fieldset class="form-group">
										<input type="text" class="form-control" name="Zip" value="">
										<label>Mã Zip</label>
									</fieldset>
								</div>
							</div>
							<div class="checkbox">
								<label class="c-input c-checkbox" style="padding-left: 20px;">
									<input type="checkbox" id="address_default_address_" name="IsDefault" value="true">
									<span class="c-indicator">Đặt là địa chỉ mặc định?</span> 
								</label>
							</div>	
							<div class="btn-row">
								<button class="btn btn-lg btn-dark-address btn-outline article-readmore btn-close" type="button" onclick="Bizweb.CustomerAddress.toggleNewForm(); return false;"><span>Hủy</span></button>
								<button class="btn btn-lg btn-primary btn-submit" id="addnew" type="submit"><span>Thêm địa chỉ</span></button>	
							</div>
						</div>
						</form> -->
					<!-- </div>
					
					<div class="row total_address">
						 

						
					</div> 
					
					
				</div>
			</div>
		</div>
	</div>
</section>

<yeu cau su dung jquery 3. trở lên -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script>$.validate({});</script>

<script type="text/javascript" charset="utf-8">


	//JS address with json

	(function (window) {
		var allProvince = [];
		var allDistrict = [];
		var allWard = [];
		var loadedData = false;

		function setProvince(zone, province) {
			$province = $("select[data-address-type='province'][data-address-zone='" + zone + "']");
			if (!$province) {
				return;
			}
			var list = ['<option value="" hidden>---</option>'];
			for (var i = 0; i < allProvince.length; i++) {
				var p = allProvince[i];
				if (p.name == province) {
					list.push("<option value='" + p.name + "' selected>" + p.name + "</option>");
					continue;
				}
				list.push("<option value='" + p.name + "'>" + p.name + "</option>");
			}

			$province.html(list.join(''));
		};

		function setDistrict(zone, province, district) {
			var $district = $("select[data-address-type='district'][data-address-zone='" + zone + "']");
			if (!$district) {
				return;
			}
			if (!province) {
				$district.val('');
				$district.attr('disabled', 'disabled');
				$district.html('');
				return;
			}
			var provinceObj = allProvince.find(function(p) { return p.name == province; });
			var districts = allDistrict.filter(function (d) { return d.province_id == provinceObj.id; });
			var list = ['<option value="" hidden>---</option>'];
			for (var i = 0; i < districts.length; i++) {
				var d = districts[i];
				if (d.name == district) {
					list.push("<option value='" + d.name + "' selected>" + d.name + "</option>");
					continue;
				}
				list.push("<option value='" + d.name + "'>" + d.name + "</option>");
			}
			$district.removeAttr('disabled');
			$district.html(list.join(''));
		};

		function setWard(zone, district, ward) {
			var $ward = $("select[data-address-type='ward'][data-address-zone='" + zone + "']");
			if (!$ward) {
				return;
			}
			if (!district) {
				$ward.val('');
				$ward.attr('disabled', 'disabled');
				$ward.html('');
				return;
			}
			var list = ['<option value="" hidden>---</option>'];
			var districtObj = allDistrict.find(function(d) { return d.name == district; });
			var wards = allWard.filter(function (w) { return w.district_id == districtObj.id; });
			for (var i = 0; i < wards.length; i++) {
				var w = wards[i];
				if (w.name == ward) {
					list.push("<option value='" + w.name + "' selected>" + w.name + "</option>");
					continue;
				}
				list.push("<option value='" + w.name+ "'>" + w.name + "</option>");
			}
			$ward.removeAttr('disabled');
			$ward.html(list.join(''));
		};


		function loadData() {
			if (loadedData) {
				return {
					then: function (f) {
						return f();
					}
				};
			}
			return fetch('/checkout/addresses.json')
				.then(function (rs) { return rs.json(); })
				.then(function (rs) {
				allProvince = rs.provinces;
				allDistrict = rs.districts;
				allWard = rs.wards;
				loadedData = true;
			});
		};

		function Address() {

		}

		function triggerChange(zone, type) {
			$('select[data-address-type="' + type + '"][data-address-zone="' + zone + '"]').trigger('address:change');
		}

		Address.prototype.bind = function () {
			$('body')
				.on('change', 'select[data-address-type]', function (e) {
				var type = e.target.getAttribute('data-address-type');
				var zone = e.target.getAttribute('data-address-zone');
				if (type === 'province') {
					triggerChange(zone, 'province');
					setDistrict(zone, e.target.value, undefined);
					triggerChange(zone, 'district');
					setWard(zone, '', undefined);
					triggerChange(zone, 'ward');
				} else if (type === 'district') {
					triggerChange(zone, 'district');
					setWard(zone, e.target.value, undefined);
					triggerChange(zone, 'ward');
				}
			})
			return this;
		};

		Address.prototype.refresh = function (callback) {
			var zones = {};
			$('[data-address-zone]').each(function () {
				var $this = $(this);
				var type = $this.data('address-type');
				if (!type) {
					return;
				}
				var zoneName = $this.data('address-zone');
				var zone = zones[zoneName] || (zones[zoneName] = {});
				zone[type] = $this.val() || $this.attr('value');
			});
			var zoneNames = Object.keys(zones);
			if (zoneNames.length == 0) {
				return;
			}
			loadData().then(function () {
				zoneNames.forEach(function (zoneName) {
					var zone = zones[zoneName];
					setProvince(zoneName, zone.province);
					triggerChange(zoneName, 'province');
					setDistrict(zoneName, zone.province, zone.district);
					triggerChange(zoneName, 'district');
					setWard(zoneName, zone.district, zone.ward);
					triggerChange(zoneName, 'ward');
				});
				if (callback) {
					callback();
				}
			});
		};

		window.Address = new Address();

	})(window)


	//Page address

	new Bizweb.CountrySelector('address_country_new');
	

							   $(document).ready(function() {

		var elements = $("input, select, textarea");
		for (var i = 0; i < elements.length; i++) {
			elements[i].oninvalid = function(e) {
				e.target.setCustomValidity("");
				if (!e.target.validity.valid) {
					e.target.setCustomValidity(e.target.getAttribute("requiredmsg"));
				}
			};
			elements[i].oninput = function(e) {
				e.target.setCustomValidity("");
			};
		}
		$('.mySelect2').each(function(){
			var old = $(this).attr('data-default');			  
			$(this).val(old);
			$(this).change();
		})

		$('.btn-close').on('click', function(e){
			e.preventDefault();
			$('.op_address').removeClass('opened');
			$('.modal_address').hide();
			$('html').removeClass('no-scroll');
			$('.not-vn').removeClass('hidden');
			Address.bind().refresh();
			$('.mySelect2').each(function(){
				var old = $(this).attr('data-default');			  
				$(this).val(old);
				$(this).change();
			})
			setTimeout( function() {
				$('input').prop('selected', false);
			}, 500)
			$('.form-group input').each(function(){
				if($(this).val() != ""){
					$(this).addClass("has-content");
				}else{
					$(this).removeClass("has-content");
				}
			})
		});
		$('.btn-fix-addr').click(function(e){
			$(this).parents('.collapse').removeClass('in').hide();
		})
	})

	$('fieldset').click(function(){
		$(this).find('input').focus();
	});

	$(document).on('click', '.btn-more', function(e) {
		$('.op_address').toggleClass('opened');
		$('#add_address').show();
		$('html').toggleClass('no-scroll');
		$('.mySelect2').each(function(){
			var old = $(this).attr('data-default');			  
			$(this).val(old);
			$(this).change();
		})
		if($("#customer_address select[name='Country'] option:selected").val() != 'Vietnam'){
			$('.not-vn').addClass('hidden');
		}else {
			$('.not-vn').removeClass('hidden');
		}

		Address.bind().refresh();
		$('.form-group input').each(function(){
			if($(this).val() != ""){
				$(this).addClass("has-content");
			}else{
				$(this).removeClass("has-content");
			}
		})
	});
	if ($( window ).width() > 768) {
		$(function(){
			setInterval(function() {
				if($('.modal_address').find("select[name='Country'] option:selected").val() != 'Vietnam') {
					if ($(".modal_address input[name='FullName']").val() === '') {
						if ($('.help-block.form-error').length) {
							$('.modal_address').css("height","515px");
						}else {
							$('.modal_address').css("height","495px");
						}
					}else {
						$('.modal_address').css("height","495px");
					}
				} else if ($('.modal_address').find("select[name='Country'] option:selected").val() === 'Vietnam') {
					if ($(".modal_address input[name='FullName']").val() !== '') {
						$('.modal_address').css("height","545px");
					}else {
						if ($('.help-block.form-error').length) {
							$('.modal_address').css("height","575px");
						}else {
							$('.modal_address').css("height","545px");
						}
					}
				}else {
					$('.modal_address').css("height","545px");
				}



				if($('.modal_edit_address').find("select[name='Country'] option:selected").val() != 'Vietnam') {
					if ($(".modal_edit_address input[name='FullName']").val() === '') {
						if ($('.help-block.form-error').length) {
							$('.modal_edit_address').css("height","515px");
						}else {
							$('.modal_edit_address').css("height","495px");
						}
					}else {
						$('.modal_edit_address').css("height","495px");
					}
				} else if ($('.modal_edit_address').find("select[name='Country'] option:selected").val() === 'Vietnam') {
					if ($(".modal_edit_address input[name='FullName']").val() !== '') {
						$('.modal_edit_address').css("height","545px");
					}else {
						if ($('.help-block.form-error').length) {
							$('.modal_edit_address').css("height","575px");
						}else {
							$('.modal_edit_address').css("height","545px");
						}
					}
				}else {
					$('.modal_edit_address').css("height","545px");
				}

			}, 500);
		})
	}

	$(function(){    
		$("select[name='Country']").change(function(){
			if( $(this).val() != 'Vietnam'){
				$('.not-vn').addClass('hidden');
			}else {
				$('.not-vn').removeClass('hidden');
			}
		}); 
	});


	$(document).on('click', '.btn-edit', function(e) {
		$('.op_address').toggleClass('opened');
		var ctr = $(this).attr('aria-controls');			
		$('#'+ctr).show();
		$('html').toggleClass('no-scroll');
		Address.bind().refresh();
		var idform = $(this).data('form');
		$('.mySelect2').each(function(){
			var old = $(this).attr('data-default');			  
			$(this).val(old);
			$(this).change();
		})
		if( $('#'+idform).find("select[name='Country']").data('default') != 'Vietnam'){
			$('.not-vn').addClass('hidden');
		}else {
			$('.not-vn').removeClass('hidden');
		}
		$('#'+idform).each(function() {
			var thisform = $(this);
			$(thisform).find('.province').each(function(){
				if($(thisform).find('.province').data('default') != ""){
					$(thisform).find('.province').addClass("has-content");
				}else{
					$(thisform).find('.province').removeClass("has-content");
				}
			})
			$(thisform).find('.district').each(function(){
				if($(thisform).find('.district').data('default') != ""){
					$(thisform).find('.district').addClass("has-content");
				}else{
					$(thisform).find('.district').removeClass("has-content");
				}
			})
			$(thisform).find('.ward').each(function(){
				if($(thisform).find('.ward').data('default') != ""){
					$(thisform).find('.ward').addClass("has-content");
				}else{
					$(thisform).find('.ward').removeClass("has-content");
				}
			})
		});
	});



	$(window).load(function(){
		setTimeout(function(){
			$('.form-group input').each(function(){
				if($(this).val() != ""){
					$(this).addClass("has-content");
				}else{
					$(this).removeClass("has-content");
				}
			})
			$('.form-group select').each(function(){
				$('.form-group .add').val("Vietnam");
				if($(this).val() != ""){
					$(this).addClass("has-content");
				}else{
					$(this).removeClass("has-content");
				}
			})
			$(".form-group input,.form-group select").focusout(function(){
				if($(this).val() != ""){
					$(this).addClass("has-content");
				}else{
					$(this).removeClass("has-content");
				}
			})
		},500);
		return false;
	});



</script>
</body>
</html>