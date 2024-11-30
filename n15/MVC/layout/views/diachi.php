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

<div class="op_address "></div>
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
					<h1 class="title-head">Địa chỉ của bạn</h1>
					<p class="btn-row">
						<button class="btn-edit-addr btn btn-primary btn-more" type="button" id="show-form-btn">Thêm địa chỉ</button> 							
					</p>
					<div id="add_address" class="form-list modal_address modal" style="height: 545px; display: none;">
						<div class="btn-close closed_pop"><span></span></div>
						<h2 class="title_pop">
							Thêm địa chỉ mới
						</h2>
						<form method="post" action="" id="customer_address" accept-charset="UTF-8"><input name="FormType" type="hidden" value="customer_address"><input name="utf8" type="hidden" value="true">
						<div class="pop_bottom">
							<div class="form_address">
								<div class="field">
									<fieldset class="form-group">
										<input type="text" name="FullName" class="form-control has-content " data-validation-error-msg="Không được để trống" required="" data-validation="required" value="" autocapitalize="words">
										<label>Họ tên* </label>
									</fieldset>
									<p class="error-msg"></p>
								</div>
								<div class="field">
									<fieldset class="form-group">
										<input type="number" class="form-control has-content" id="Phone" pattern="\d+" name="Phone" required="" maxlength="12" value="">
										<label>Số điện thoại*</label>
									</fieldset>
								</div>
								<div class="field">
									<fieldset class="form-group">
										<input type="text" class="form-control has-content" name="Company" value="">
										<label>Công ty</label>
									</fieldset>
								</div>

								<div class="field">
									<fieldset class="form-group select-field">
										<select name="Country" class="form-control has-content vn-fix add has-content" id="mySelect1" required="" data-default="Việt Nam"><option value="Abkhazia">Abkhazia</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo-Brazzaville">Congo-Brazzaville</option><option value="Congo-Kinshasa">Congo-Kinshasa</option><option value="Costa Rica">Costa Rica</option><option value="Côte d'Ivoire">Côte d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan (Nippon)">Japan (Nippon)</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="North Korea">North Korea</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macedonia (FYROM)">Macedonia (FYROM)</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Nagorno-Karabakh">Nagorno-Karabakh</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="South Korea">South Korea</option><option value="New Caledonia">New Caledonia</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="South Sudan">South Sudan</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Saint Helena">Saint Helena</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option><option value="South Africa">South Africa</option><option value="South Ossetia">South Ossetia</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Tokelau">Tokelau</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="China">China</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican">Vatican</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Wales">Wales</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option><option value="Taiwan">Taiwan</option></select>
										<label>Quốc gia</label>
									</fieldset>
								</div>
								<div class="group-country">
									<fieldset class="form-group select-field not-vn">
										<select name="Province" value="" class="form-control has-content add has-content" required="" id="mySelect2" data-address-type="province" data-address-zone="billing" data-select2-id="select2-data-billingProvince"><option value="" hidden="">---</option><option value="Hà Nội">Hà Nội</option><option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option><option value="An Giang">An Giang</option><option value="Bà Rịa-Vũng Tàu">Bà Rịa-Vũng Tàu</option><option value="Bắc Giang">Bắc Giang</option><option value="Bắc Kạn">Bắc Kạn</option><option value="Bạc Liêu">Bạc Liêu</option><option value="Bắc Ninh">Bắc Ninh</option><option value="Bến Tre">Bến Tre</option><option value="Bình Dương">Bình Dương</option><option value="Bình Định">Bình Định</option><option value="Bình Phước">Bình Phước</option><option value="Bình Thuận">Bình Thuận</option><option value="Cà Mau">Cà Mau</option><option value="Cao Bằng">Cao Bằng</option><option value="Cần Thơ">Cần Thơ</option><option value="Đà Nẵng">Đà Nẵng</option><option value="Đắk Lắk">Đắk Lắk</option><option value="Đắk Nông">Đắk Nông</option><option value="Điện Biên">Điện Biên</option><option value="Đồng Nai">Đồng Nai</option><option value="Đồng Tháp">Đồng Tháp</option><option value="Gia Lai">Gia Lai</option><option value="Hà Giang">Hà Giang</option><option value="Hà Nam">Hà Nam</option><option value="Hà Tĩnh">Hà Tĩnh</option><option value="Hải Dương">Hải Dương</option><option value="Hải Phòng">Hải Phòng</option><option value="Hậu Giang">Hậu Giang</option><option value="Hòa Bình">Hòa Bình</option><option value="Hưng Yên">Hưng Yên</option><option value="Khánh Hòa">Khánh Hòa</option><option value="Kiên Giang">Kiên Giang</option><option value="Kon Tum">Kon Tum</option><option value="Lai Châu">Lai Châu</option><option value="Lâm Đồng">Lâm Đồng</option><option value="Lạng Sơn">Lạng Sơn</option><option value="Lào Cai">Lào Cai</option><option value="Long An">Long An</option><option value="Nam Định">Nam Định</option><option value="Nghệ An">Nghệ An</option><option value="Ninh Bình">Ninh Bình</option><option value="Ninh Thuận">Ninh Thuận</option><option value="Phú Thọ">Phú Thọ</option><option value="Phú Yên">Phú Yên</option><option value="Quảng Bình">Quảng Bình</option><option value="Quảng Nam">Quảng Nam</option><option value="Quảng Ngãi">Quảng Ngãi</option><option value="Quảng Ninh">Quảng Ninh</option><option value="Quảng Trị">Quảng Trị</option><option value="Sóc Trăng">Sóc Trăng</option><option value="Sơn La">Sơn La</option><option value="Tây Ninh">Tây Ninh</option><option value="Thái Bình">Thái Bình</option><option value="Thái Nguyên">Thái Nguyên</option><option value="Thanh Hóa">Thanh Hóa</option><option value="Thừa Thiên Huế">Thừa Thiên Huế</option><option value="Tiền Giang">Tiền Giang</option><option value="Trà Vinh">Trà Vinh</option><option value="Tuyên Quang">Tuyên Quang</option><option value="Vĩnh Long">Vĩnh Long</option><option value="Vĩnh Phúc">Vĩnh Phúc</option><option value="Yên Bái">Yên Bái</option></select>
										<label>Tỉnh thành*</label>
									</fieldset>
									<fieldset class="form-group select-field not-vn">
										<select name="District" class="form-control has-content add has-content" value="" required="" id="mySelect3" data-address-type="district" data-address-zone="billing" data-select2-id="select2-data-billingDistrict" disabled="disabled"></select>
										<label>Quận huyện*</label>
									</fieldset>
									<fieldset class="form-group select-field not-vn">
										<select name="Ward" class="form-control has-content add has-content" value="" required="" id="mySelect4" data-address-type="ward" data-address-zone="billing" data-select2-id="select2-data-billingWard" disabled="disabled"></select>
										<label>Phường xã*</label>
									</fieldset>
								</div>
								<div class="field">
									<fieldset class="form-group">
										<input type="text" class="form-control has-content" required="" name="Address1" value="">
										<label>Địa chỉ*</label>
									</fieldset>
								</div>
								<div class="field">
									<fieldset class="form-group">
										<input type="text" class="form-control has-content" name="Zip" value="">
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
								<button class="btn btn-lg btn-dark-address btn-outline article-readmore btn-close" type="button" ><span>Hủy</span></button>
								<button class="btn btn-lg btn-primary btn-submit" id="addnew" type="submit"><span>Thêm địa chỉ</span></button>	
							</div>
						</div>
						</form>
					</div>
					
					<!-- Address -->
					 <div class="row total_address">
					<?php
                    include_once 'Model/connectmodel.php';
                    $connectModel = new ConnectModel();
                    $query = "SELECT * FROM diachi";
                    $result = $connectModel->selectall($query);
					$zx = '';
                    foreach ($result as $key => $x) {
						$isDefault = $x['diachi_macdinh'] == 1;
                     $zx .= '
					<div id="view_address" class="customer_address col-xs-12 col-lg-12 col-md-12 col-xl-12">
							<div class="address_info" style="border-top: 1px #ebebeb solid;padding-top: 16px;margin-top: 20px;">
								<div class="address-group">
									<div class="address form-signup">
										<p><strong>Họ tên: </strong> '.$x['hoten'].'</p>
										<p><strong>Địa chỉ: </strong> '.$x['diachi'];
										if ($isDefault) {
											$zx .= '<span class="address-default">
												<i class="far fa-check-circle"></i> Địa chỉ mặc định
											</span>';
										}
										$zx .= '</p>
										<p><strong>Số điện thoại:</strong> '.$x['sodienthoai'].'</p>
									</div>
								</div>
								<div id="tool_address_'.$x['id'].'" class="btn-address">
									<p class="btn-row">
										<button class="btn-edit-addr btn btn-primary btn-edit" type="button" data-form="edit_address_'.$x['id'].'" aria-controls="edit_address_'.$x['id'].'">
											Sửa
										</button>
										<button 
											class="btn btn-dark-address btn-edit-addr btn-delete" 
											type="button" 
											style="font-size: 16px;" 
											onclick="deleteAddress('.$x['id'].')">
											<span>Xóa</span>
										</button>
									</p>
								</div>
							</div>
						</div>';
					}
					echo $zx;
					?>
					<div id="edit_address" class="form-list modal_address modal modal_edit_address" style="height: 545px; display: none;">
							<div class="btn-close closed_pop"><span></span></div>
							<h2 class="title_pop">
								Chỉnh sửa địa chỉ
							</h2>
							<form method="post" action="/account/addresses/27730392" id="customer_address" accept-charset="UTF-8"><input name="FormType" type="hidden" value="customer_address"><input name="utf8" type="hidden" value="true">
							<div class="pop_bottom">
								<div class="form_address">
									<div class="field">
										<fieldset class="form-group">
											<input type="text" name="FullName" class="form-control has-content" required="" value="Nguyễn Bá Tâm" autocapitalize="words">
											<label>Họ tên*</label>
										</fieldset>
										<p class="error-msg"></p>
									</div>
									<div class="field">
										<fieldset class="form-group">
											<input type="number" pattern="\d+" class="form-control has-content" required="" id="Phone" name="Phone" maxlength="12" value="0917085061">
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
											<select name="Country" class="form-control mySelect2 has-content" required="" id="mySelect2_27730392" data-default="Vietnam">Vietnam<option value="Abkhazia">Abkhazia</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo-Brazzaville">Congo-Brazzaville</option><option value="Congo-Kinshasa">Congo-Kinshasa</option><option value="Costa Rica">Costa Rica</option><option value="Côte d'Ivoire">Côte d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan (Nippon)">Japan (Nippon)</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="North Korea">North Korea</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macedonia (FYROM)">Macedonia (FYROM)</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Nagorno-Karabakh">Nagorno-Karabakh</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="South Korea">South Korea</option><option value="New Caledonia">New Caledonia</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="South Sudan">South Sudan</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Saint Helena">Saint Helena</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option><option value="South Africa">South Africa</option><option value="South Ossetia">South Ossetia</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Tokelau">Tokelau</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="China">China</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican">Vatican</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Wales">Wales</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option><option value="Taiwan">Taiwan</option></select>
											<label>Quốc gia</label>
										</fieldset>
									</div>
									<div class="group-country">
										<fieldset class="form-group select-field not-vn">
											<select name="Province" value="Đắk Lắk" required="" data-default="Đắk Lắk" class="form-control add province myselect has-content" id="mySelect3_27730392" data-address-type="province" data-address-zone="27730392" data-select2-id="select2-data-billingProvince"><option value="" hidden="">---</option><option value="Hà Nội">Hà Nội</option><option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option><option value="An Giang">An Giang</option><option value="Bà Rịa-Vũng Tàu">Bà Rịa-Vũng Tàu</option><option value="Bắc Giang">Bắc Giang</option><option value="Bắc Kạn">Bắc Kạn</option><option value="Bạc Liêu">Bạc Liêu</option><option value="Bắc Ninh">Bắc Ninh</option><option value="Bến Tre">Bến Tre</option><option value="Bình Dương">Bình Dương</option><option value="Bình Định">Bình Định</option><option value="Bình Phước">Bình Phước</option><option value="Bình Thuận">Bình Thuận</option><option value="Cà Mau">Cà Mau</option><option value="Cao Bằng">Cao Bằng</option><option value="Cần Thơ">Cần Thơ</option><option value="Đà Nẵng">Đà Nẵng</option><option value="Đắk Lắk" selected="">Đắk Lắk</option><option value="Đắk Nông">Đắk Nông</option><option value="Điện Biên">Điện Biên</option><option value="Đồng Nai">Đồng Nai</option><option value="Đồng Tháp">Đồng Tháp</option><option value="Gia Lai">Gia Lai</option><option value="Hà Giang">Hà Giang</option><option value="Hà Nam">Hà Nam</option><option value="Hà Tĩnh">Hà Tĩnh</option><option value="Hải Dương">Hải Dương</option><option value="Hải Phòng">Hải Phòng</option><option value="Hậu Giang">Hậu Giang</option><option value="Hòa Bình">Hòa Bình</option><option value="Hưng Yên">Hưng Yên</option><option value="Khánh Hòa">Khánh Hòa</option><option value="Kiên Giang">Kiên Giang</option><option value="Kon Tum">Kon Tum</option><option value="Lai Châu">Lai Châu</option><option value="Lâm Đồng">Lâm Đồng</option><option value="Lạng Sơn">Lạng Sơn</option><option value="Lào Cai">Lào Cai</option><option value="Long An">Long An</option><option value="Nam Định">Nam Định</option><option value="Nghệ An">Nghệ An</option><option value="Ninh Bình">Ninh Bình</option><option value="Ninh Thuận">Ninh Thuận</option><option value="Phú Thọ">Phú Thọ</option><option value="Phú Yên">Phú Yên</option><option value="Quảng Bình">Quảng Bình</option><option value="Quảng Nam">Quảng Nam</option><option value="Quảng Ngãi">Quảng Ngãi</option><option value="Quảng Ninh">Quảng Ninh</option><option value="Quảng Trị">Quảng Trị</option><option value="Sóc Trăng">Sóc Trăng</option><option value="Sơn La">Sơn La</option><option value="Tây Ninh">Tây Ninh</option><option value="Thái Bình">Thái Bình</option><option value="Thái Nguyên">Thái Nguyên</option><option value="Thanh Hóa">Thanh Hóa</option><option value="Thừa Thiên Huế">Thừa Thiên Huế</option><option value="Tiền Giang">Tiền Giang</option><option value="Trà Vinh">Trà Vinh</option><option value="Tuyên Quang">Tuyên Quang</option><option value="Vĩnh Long">Vĩnh Long</option><option value="Vĩnh Phúc">Vĩnh Phúc</option><option value="Yên Bái">Yên Bái</option></select>
											<label>Tỉnh thành*</label>
										</fieldset>
										<fieldset class="form-group select-field not-vn">
											<select name="District" class="form-control add  district myselect has-content" required="" data-default="Huyện Krông Ana" value="Huyện Krông Ana" id="mySelect4_27730392" data-address-type="district" data-address-zone="27730392" data-select2-id="select2-data-billingDistrict"><option value="" hidden="">---</option><option value="Thành phố Buôn Ma Thuột">Thành phố Buôn Ma Thuột</option><option value="Thị xã Buôn Hồ">Thị xã Buôn Hồ</option><option value="Huyện Buôn Đôn">Huyện Buôn Đôn</option><option value="Huyện Cư Kuin">Huyện Cư Kuin</option><option value="Huyện Cư M" gar'="">Huyện Cư M'gar</option><option value="Huyện Ea H" leo'="">Huyện Ea H'leo</option><option value="Huyện Ea Kar">Huyện Ea Kar</option><option value="Huyện Ea Súp">Huyện Ea Súp</option><option value="Huyện Krông Bông">Huyện Krông Bông</option><option value="Huyện Krông Búk">Huyện Krông Búk</option><option value="Huyện Krông Pắc">Huyện Krông Pắc</option><option value="Huyện Lắk">Huyện Lắk</option><option value="Huyện M" Đrắk'="">Huyện M'Đrắk</option><option value="Huyện Krông Ana" selected="">Huyện Krông Ana</option><option value="Huyện Krông Năng">Huyện Krông Năng</option></select>
											<label>Quận huyện*</label>
										</fieldset>
										<fieldset class="form-group select-field not-vn">
											<select name="Ward" class="form-control add ward myselect has-content" required="" data-default="Thị trấn Buôn Trấp" value="Thị trấn Buôn Trấp" id="mySelect5_27730392" data-address-type="ward" data-address-zone="27730392" data-select2-id="select2-data-billingWard"><option value="" hidden="">---</option><option value="Thị trấn Buôn Trấp" selected="">Thị trấn Buôn Trấp</option><option value="Xã Dray Sáp">Xã Dray Sáp</option><option value="Xã Ea Na">Xã Ea Na</option><option value="Xã Ea Bông">Xã Ea Bông</option><option value="Xã Băng A Drênh">Xã Băng A Drênh</option><option value="Xã Dur KMăl">Xã Dur KMăl</option><option value="Xã Bình Hòa">Xã Bình Hòa</option><option value="Xã Quảng Điền">Xã Quảng Điền</option></select>
											<label>Phường xã*</label>
										</fieldset>
									</div>
									<div class="field">
										<fieldset class="form-group">
											<input type="text" class="form-control has-content" required="" name="Address1" value="đội 9 thôn 1">
											<label>Địa chỉ*</label>
										</fieldset>
									</div>
									<div class="field">
										<fieldset class="form-group">
											<input type="text" class="form-control has-content" name="Zip" value="600000">
											<label>Mã Zip</label>
										</fieldset>
									</div>

								</div>
								<div class="checkbox hidden ">
									<label class="c-input c-checkbox" style="padding-left: 20px;">
										<input type="checkbox" name="IsDefault" value="true">
										<span class="c-indicator">Đặt là địa chỉ mặc định?</span> 
									</label>
								</div>	
								<div class="btn-row">	
									<button class="btn btn-dark-address btn-fix-addr btn-close" type="button" data-form="edit_address_27730392">
										Hủy
									</button>										
									<button class="btn btn-primary btn-submit" id="update"><span>Cập nhật địa chỉ</span></button>																	

								</div>
							</div>
							</form>
						</div>
				</div>
					<!-- end -->
					
				</div>
			</div>
		</div>
	</div>
<script>   // JavaScript để hiện form khi bấm nút
		var btn = document.getElementById('show-form-btn');
        var form = document.getElementById('add_address');
        var op = document.querySelector('.op_address ');
	btn.addEventListener('click', function() {
		form.style.display = 'block';
		op.classList.add('opened');
	});
	op.addEventListener('click', function() {
		form.style.display = 'none';
		op.classList.remove('opened');
	});
       
</script>