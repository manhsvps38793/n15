
<div class="flexbox">
				<link rel="stylesheet" href="public/css/thanhtoan.css">
				<link rel="stylesheet" href="public/css/checkout.css">
				<input id="reloadValue" type="hidden" name="reloadValue" value="" />
				<input id="is_vietnam" type="hidden" value="true" />
				<input id="is_vietnam_location" type="hidden" value="true" />

				<div class="banner">
					<div class="wrap">

					</div>
				</div>

				<button class="order-summary-toggle order-summary-toggle-hide">
					<div class="wrap">
						<div class="order-summary-toggle-inner">
							<div class="order-summary-toggle-icon-wrapper">
								<svg width="20" height="19" xmlns="http://www.w3.org/2000/svg"
									class="order-summary-toggle-icon">
									<path
										d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z">
									</path>
								</svg>
							</div>
							<div class="order-summary-toggle-text order-summary-toggle-text-show">
								<span>Hiển thị thông tin đơn hàng</span>
								<svg width="11" height="6" xmlns="http://www.w3.org/2000/svg"
									class="order-summary-toggle-dropdown" fill="#000">
									<path
										d="M.504 1.813l4.358 3.845.496.438.496-.438 4.642-4.096L9.504.438 4.862 4.534h.992L1.496.69.504 1.812z">
									</path>
								</svg>
							</div>
							<div class="order-summary-toggle-text order-summary-toggle-text-hide">
								<span>Ẩn thông tin đơn hàng</span>
								<svg width="11" height="7" xmlns="http://www.w3.org/2000/svg"
									class="order-summary-toggle-dropdown" fill="#000">
									<path
										d="M6.138.876L5.642.438l-.496.438L.504 4.972l.992 1.124L6.138 2l-.496.436 3.862 3.408.992-1.122L6.138.876z">
									</path>
								</svg>
							</div>
							<div class="order-summary-toggle-total-recap" data-checkout-payment-due-target="290000000">
								<span class="total-recap-final-price">2,900,000₫</span>
							</div>
						</div>
					</div>
				</button>
				<div class="content content-second">
					<div class="wrap">
						<div class="sidebar sidebar-second">
							<div class="sidebar-content">
								<div class="order-summary">
									<div class="order-summary-sections">


										<div class="order-summary-section order-summary-section-discount"
											data-order-summary-section="discount">
											<form id="form_discount_add" accept-charset="UTF-8" method="post">
												<input name="utf8" type="hidden" value="✓">

												<div class="fieldset">
													<div class="field  ">
														<div class="field-input-btn-wrapper">
															<div class="field-input-wrapper">
																<label class="field-label" for="discount.code">Mã giảm
																	giá</label>
																<input placeholder="Mã giảm giá" class="field-input"
																	data-discount-field="true" autocomplete="false"
																	autocapitalize="off" spellcheck="false" size="30"
																	type="text" id="discount.code" name="discount.code"
																	value="" />
															</div>
															<button type="submit"
																class="field-input-btn btn btn-default btn-disabled">
																<span class="btn-content">Sử dụng</span>
																<i class="btn-spinner icon icon-button-spinner"></i>
															</button>
														</div>

													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content">

					<div class="wrap">
						<div class="sidebar">
							<button class="expanded desk-toggle-items">
								<div><span>TÓM TẮT ĐƠN HÀNG</span><svg width="20" height="20" viewBox="0 0 20 20"
										fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M16.25 7.5L10 13.75L3.75 7.5" stroke="#2E2E2E" stroke-linecap="round"
											stroke-linejoin="round">
										</path>
									</svg></div><span class="js-cart-price">
									2,900,000₫
								</span>
							</button>
							<div class="sidebar-content">
								<div class="order-summary order-summary-is-collapsed">
									<h2 class="visually-hidden">Thông tin đơn hàng</h2>
									<div class="order-summary-sections">
										<div class="order-summary-section order-summary-section-product-list"
											data-order-summary-section="line-items">
											<table class="product-table ">
												<thead>
													<tr>
														<th scope="col"><span class="visually-hidden">Hình ảnh</span>
														</th>
														<th scope="col"><span class="visually-hidden">Mô tả</span></th>
														<th scope="col"><span class="visually-hidden">Số lượng</span>
														</th>
														<th scope="col"><span class="visually-hidden">Giá</span></th>
													</tr>
												</thead>
												<?php
                    include_once 'Model/connectmodel.php';
                    $connectModel = new ConnectModel();
                    $query = "SELECT * FROM sanpham";
                    $result = $connectModel->selectall($query);
                    $ch ='';
					if (isset($_GET['id'])) {
						$id = $_GET['id']; 
					}
                    foreach($result as $x) {
						if($id == $x['MaSP']){
                            $formattedNumber = number_format($x['Gia'], 0, '.', '.');
                     $ch .= '<tbody>
													<tr class="product" data-product-id="1052746355"
														data-variant-id="1120184191">
														<td class="product-image">
															<div class="product-thumbnail">
																<div class="product-thumbnail-wrapper">
																	<img class="product-thumbnail-image"
																		src="public/img/'.$x['HinhAnh'].'" alt="">
																</div>
																<span class="product-thumbnail-quantity"
																	aria-hidden="true">1</span>
															</div>
														</td>
														<td class="product-description">
															<span class="product-description-name order-summary-emphasis" style="font-weight: 600; font-size: 14px;">
																'.$x['TenSP'].'
															</span>
															<span
																class="product-description-variant order-summary-small-text">
																VND
															</span>
														</td>
														<td class="product-quantity visually-hidden">1</td>
														<td class="product-price">
															<span class="order-summary-emphasis">'. $formattedNumber.'₫</span>
														</td>
													</tr>
												</tbody>';
                    }
				}
												
								$ch .= '			</table>
										</div>
										<div class="order-summary-section order-summary-section-discount"
											data-order-summary-section="discount">
											<form id="form_discount_add" accept-charset="UTF-8" method="post">
												<input name="utf8" type="hidden" value="✓">
												<div class="fieldset">
													<div class="field  ">
														<div class="field-input-btn-wrapper">
															<div class="field-input-wrapper">
																<label class="field-label" for="discount.code">Mã giảm
																	giá</label>
																<input placeholder="Mã giảm giá" class="field-input"
																	data-discount-field="true" autocomplete="false"
																	autocapitalize="off" spellcheck="false" size="30"
																	type="text" id="discount.code" name="discount.code"
																	value="" />
															</div>
															<button type="submit"
																class="field-input-btn btn btn-default btn-disabled">
																<span class="btn-content">Sử dụng</span>
																<i class="btn-spinner icon icon-button-spinner"></i>
															</button>
														</div>
													</div>
												</div>
											</form>
										</div>
										<div class="order-summary-section order-summary-section-total-lines payment-lines"
											data-order-summary-section="payment-lines">
											<table class="total-line-table">
												<thead>
													<tr>
														<th scope="col"><span class="visually-hidden">Mô tả</span></th>
														<th scope="col"><span class="visually-hidden">Giá</span></th>
													</tr>
												</thead>
												<tbody>
													<tr class="total-line total-line-subtotal">
														<td class="total-line-name">Tạm tính</td>
														<td class="total-line-price">
															<span class="order-summary-emphasis"
																data-checkout-subtotal-price-target="290000000">
																'.$formattedNumber.'₫
															</span>
														</td>
													</tr>
													<tr class="total-line total-line-shipping">
														<td class="total-line-name">Phí vận chuyển</td>
														<td class="total-line-price">
															<span class="order-summary-emphasis"
																data-checkout-total-shipping-target="0">

																—

															</span>
														</td>
													</tr>
												</tbody>
												<tfoot class="total-line-table-footer">
													<tr class="total-line">
														<td class="total-line-name payment-due-label">
															<span class="payment-due-label-total">Tổng cộng</span>
														</td>
														<td class="total-line-name payment-due">
															<span class="payment-due-currency">VND</span>
															<span class="payment-due-price"
																data-checkout-payment-due-target="290000000">
																'.$formattedNumber.'₫
															</span>
															<span class="checkout_version" display:none
																data_checkout_version="8">
															</span>
														</td>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>';
						echo $ch;
			
			?>
						<div class="main">
							<div class="main-header">
								<ul class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="/cart">Giỏ hàng</a>
									</li>
									<li class="breadcrumb-item breadcrumb-item-current">
										Thông tin giao hàng
									</li>
								</ul>
							</div>
							<div class="main-content">
								<div id="checkout_order_information_changed_error_message" class="hidden"
									style="margin-bottom:15px">
									<p class="field-message field-message-error alert alert-danger"><svg x="0px" y="0px"
											viewBox="0 0 286.054 286.054"
											style="enable-background:new 0 0 286.054 286.054;" xml:space="preserve">
											<g>
												<path style="fill:#E2574C;"
													d="M143.027,0C64.04,0,0,64.04,0,143.027c0,78.996,64.04,143.027,143.027,143.027 c78.996,0,143.027-64.022,143.027-143.027C286.054,64.04,222.022,0,143.027,0z M143.027,259.236 c-64.183,0-116.209-52.026-116.209-116.209S78.844,26.818,143.027,26.818s116.209,52.026,116.209,116.209 S207.21,259.236,143.027,259.236z M143.036,62.726c-10.244,0-17.995,5.346-17.995,13.981v79.201c0,8.644,7.75,13.972,17.995,13.972 c9.994,0,17.995-5.551,17.995-13.972V76.707C161.03,68.277,153.03,62.726,143.036,62.726z M143.036,187.723 c-9.842,0-17.852,8.01-17.852,17.86c0,9.833,8.01,17.843,17.852,17.843s17.843-8.01,17.843-17.843 C160.878,195.732,152.878,187.723,143.036,187.723z" />
											</g>
											<g> </g>
											<g> </g>
											<g> </g>
											<g> </g>
											<g> </g>
											<g> </g>
											<g> </g>
											<g> </g>
											<g> </g>
											<g> </g>
											<g> </g>
											<g> </g>
											<g> </g>
											<g> </g>
											<g> </g>
										</svg>
										<span>
										</span>
									</p>
								</div>
								<div class="step">
									<div class="step-sections steps-onepage" step="1">
										<div class="section">
											<div class="section-header">
												<h2 class="section-title">Thông tin giao hàng</h2>
											</div>
											<div class="section-content section-customer-information no-mb">
												<div class="fieldset">
													<div class="field field-required  ">
														<div class="field-input-wrapper">
															<label class="field-label"
																for="billing_address_full_name">Họ và
																tên</label>
															<input placeholder="Họ và tên" autocapitalize="off"
																spellcheck="false" class="field-input" size="30"
																type="text" id="billing_address_full_name"
																name="billing_address[full_name]" value=""
																autocomplete="false" />
														</div>
													</div>
													<div class="field field-required field-two-thirds  ">
														<div class="field-input-wrapper">
															<label class="field-label"
																for="checkout_user_email">Email</label>
															<input autocomplete="false" placeholder="Email"
																autocapitalize="off" spellcheck="false"
																class="field-input" size="30" type="email"
																id="checkout_user_email" name="checkout_user[email]"
																value="" />
														</div>
													</div>

													<div class="field field-required field-third  ">
														<div class="field-input-wrapper">
															<label class="field-label" for="billing_address_phone">Số
																điện
																thoại</label>
															<input autocomplete="false" placeholder="Số điện thoại"
																autocapitalize="off" spellcheck="false"
																class="field-input" size="30" maxlength="15" type="tel"
																id="billing_address_phone" name="billing_address[phone]"
																value="" />
														</div>
													</div>
												</div>
											</div>
											<div class="section-content">
												<div class="fieldset">

													<form autocomplete="off" id="form_update_shipping_method"
														class="field default" accept-charset="UTF-8" method="post">
														<input name="utf8" type="hidden" value="✓">
														<div class="content-box mt0">

															<div id="form_update_location_customer_shipping"
																class="order-checkout__loading radio-wrapper content-box-row content-box-row-padding content-box-row-secondary "
																for="customer_pick_at_location_false">
																<input name="utf8" type="hidden" value="✓">
																<div class="order-checkout__loading--box">
																	<div class="order-checkout__loading--circle"></div>
																</div>
																<div class="field field-required  ">
																	<div class="field-input-wrapper">
																		<label class="field-label"
																			for="billing_address_address1">Địa
																			chỉ</label>
																		<input placeholder="Địa chỉ"
																			autocapitalize="off" spellcheck="false"
																			class="field-input" size="30" type="text"
																			id="billing_address_address1"
																			name="billing_address[address1]" value="" />
																	</div>
																</div>
																<input name="selected_customer_shipping_country"
																	type="hidden" value="">
																<input name="selected_customer_shipping_province"
																	type="hidden" value="">
																<input name="selected_customer_shipping_district"
																	type="hidden" value="">
																<input name="selected_customer_shipping_ward"
																	type="hidden" value="">

																<div
																	class="field field-show-floating-label field-required field-third ">
																	<div
																		class="field-input-wrapper field-input-wrapper-select">
																		<label class="field-label"
																			for="customer_shipping_province">
																			Tỉnh / thành
																		</label>
																		<select class="field-input"
																			id="customer_shipping_province"
																			name="customer_shipping_province">
																			<option data-code="null" value="null"
																				selected>

																				Chọn tỉnh / thành </option>
																			<option data-code="HC" value="50">Hồ Chí
																				Minh
																			</option>
																			<option data-code="HI" value="1">Hà Nội
																			</option>
																			<option data-code="DA" value="32">Đà Nẵng
																			</option>
																			<option data-code="AG" value="57">An Giang
																			</option>
																			<option data-code="BV" value="49">Bà Rịa -
																				Vũng Tàu
																			</option>
																			<option data-code="BI" value="47">Bình Dương
																			</option>
																			<option data-code="BP" value="45">Bình Phước
																			</option>
																			<option data-code="BU" value="39">Bình Thuận
																			</option>
																			<option data-code="BD" value="35">Bình Định
																			</option>
																			<option data-code="BL" value="62">Bạc Liêu
																			</option>
																			<option data-code="BG" value="15">Bắc Giang
																			</option>
																			<option data-code="BK" value="4">Bắc Kạn
																			</option>
																			<option data-code="BN" value="18">Bắc Ninh
																			</option>
																			<option data-code="BT" value="53">Bến Tre
																			</option>
																			<option data-code="CB" value="3">Cao Bằng
																			</option>
																			<option data-code="CM" value="63">Cà Mau
																			</option>
																			<option data-code="CN" value="59">Cần Thơ
																			</option>
																			<option data-code="GL" value="41">Gia Lai
																			</option>
																			<option data-code="HG" value="2">Hà Giang
																			</option>
																			<option data-code="HM" value="23">Hà Nam
																			</option>
																			<option data-code="HT" value="28">Hà Tĩnh
																			</option>
																			<option data-code="HO" value="11">Hòa Bình
																			</option>
																			<option data-code="HY" value="21">Hưng Yên
																			</option>
																			<option data-code="HD" value="19">Hải Dương
																			</option>
																			<option data-code="HP" value="20">Hải Phòng
																			</option>
																			<option data-code="HU" value="60">Hậu Giang
																			</option>
																			<option data-code="KH" value="37">Khánh Hòa
																			</option>
																			<option data-code="KG" value="58">Kiên Giang
																			</option>
																			<option data-code="KT" value="40">Kon Tum
																			</option>
																			<option data-code="LI" value="8">Lai Châu
																			</option>
																			<option data-code="LA" value="51">Long An
																			</option>
																			<option data-code="LO" value="6">Lào Cai
																			</option>
																			<option data-code="LD" value="44">Lâm Đồng
																			</option>
																			<option data-code="LS" value="13">Lạng Sơn
																			</option>
																			<option data-code="ND" value="24">Nam Định
																			</option>
																			<option data-code="NA" value="27">Nghệ An
																			</option>
																			<option data-code="NB" value="25">Ninh Bình
																			</option>
																			<option data-code="NT" value="38">Ninh Thuận
																			</option>
																			<option data-code="PT" value="16">Phú Thọ
																			</option>
																			<option data-code="PY" value="36">Phú Yên
																			</option>
																			<option data-code="QB" value="29">Quảng Bình
																			</option>
																			<option data-code="QM" value="33">Quảng Nam
																			</option>
																			<option data-code="QG" value="34">Quảng Ngãi
																			</option>
																			<option data-code="QN" value="14">Quảng Ninh
																			</option>
																			<option data-code="QT" value="30">Quảng Trị
																			</option>
																			<option data-code="ST" value="61">Sóc Trăng
																			</option>
																			<option data-code="SL" value="9">Sơn La
																			</option>
																			<option data-code="TH" value="26">Thanh Hóa
																			</option>
																			<option data-code="TB" value="22">Thái Bình
																			</option>
																			<option data-code="TY" value="12">Thái
																				Nguyên
																			</option>
																			<option data-code="TT" value="31">Thừa Thiên
																				Huế
																			</option>
																			<option data-code="TG" value="52">Tiền Giang
																			</option>
																			<option data-code="TV" value="54">Trà Vinh
																			</option>
																			<option data-code="TQ" value="5">Tuyên Quang
																			</option>
																			<option data-code="TN" value="46">Tây Ninh
																			</option>
																			<option data-code="VL" value="55">Vĩnh Long
																			</option>
																			<option data-code="VT" value="17">Vĩnh Phúc
																			</option>
																			<option data-code="YB" value="10">Yên Bái
																			</option>
																			<option data-code="DB" value="7">Điện Biên
																			</option>
																			<option data-code="DC" value="42">Đắk Lắk
																			</option>
																			<option data-code="DO" value="43">Đắk Nông
																			</option>
																			<option data-code="DN" value="48">Đồng Nai
																			</option>
																			<option data-code="DT" value="56">Đồng Tháp
																			</option>
																		</select>
																	</div>
																</div>
																<div
																	class="field field-show-floating-label field-required field-third ">
																	<div
																		class="field-input-wrapper field-input-wrapper-select">
																		<label class="field-label"
																			for="customer_shipping_district">Quận
																			/
																			huyện</label>
																		<select class="field-input"
																			id="customer_shipping_district"
																			name="customer_shipping_district">
																			<option data-code="null" value="null"
																				selected>Chọn
																				quận / huyện</option>
																		</select>
																	</div>
																</div>
																<div
																	class="field field-show-floating-label field-required  field-third  ">
																	<div
																		class="field-input-wrapper field-input-wrapper-select">
																		<label class="field-label"
																			for="customer_shipping_ward">Phường /
																			xã</label>
																		<select class="field-input"
																			id="customer_shipping_ward"
																			name="customer_shipping_ward">
																			<option data-code="null" value="null"
																				selected>Chọn
																				phường / xã</option>
																		</select>
																	</div>
																</div>
																<div id="div_location_country_not_vietnam"
																	class="section-customer-information ">
																	<div class="field field-two-thirds">
																		<div class="field-input-wrapper">
																			<label class="field-label"
																				for="billing_address_city">Thành
																				phố</label>
																			<input placeholder="Thành phố"
																				autocapitalize="off" spellcheck="false"
																				class="field-input" size="30"
																				type="text" id="billing_address_city"
																				name="billing_address[city]" value="" />
																		</div>
																	</div>
																	<div class="field field-third">
																		<div class="field-input-wrapper">
																			<label class="field-label"
																				for="billing_address_zip">Mã bưu
																				chính</label>
																			<input placeholder="Mã bưu chính"
																				autocapitalize="off" spellcheck="false"
																				class="field-input" size="30"
																				type="text" id="billing_address_zip"
																				name="billing_address[zip]" value="" />
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</form>
												</div>
											</div>
											<div id="change_pick_location_or_shipping">
												<div id="section-payment-method" class="section">
													<div class="order-checkout__loading--box">
														<div class="order-checkout__loading--circle"></div>
													</div>
													<div class="section-header">
														<h2 class="section-title">Phương thức thanh toán</h2>
													</div>
													<div class="section-content">
														<div class="content-box">
															<div class="radio-wrapper content-box-row">
																<label class="radio-label"
																	for="payment_method_id_1003311119">
																	<div class="radio-input payment-method-checkbox">
																		<input type-id='1'
																			id="payment_method_id_1003311119"
																			class="input-radio" name="payment_method_id"
																			type="radio" value="1003311119" checked />
																	</div>
																	<div class='radio-content-input'>
																		<img class='main-img'
																			src="https://hstatic.net/0/0/global/design/seller/image/payment/cod.svg?v=6" />
																		<div>
																			<span class="radio-label-primary">Thanh toán
																				khi
																				giao hàng (không áp dụng đơn hàng dưới
																				1.000.000)</span>
																			<span class='quick-tagline hidden'></span>
																		</div>
																	</div>
																</label>
															</div>
															<div class="radio-wrapper content-box-row">
																<label class="radio-label"
																	for="payment_method_id_1003443953">
																	<div class="radio-input payment-method-checkbox">
																		<input type-id='26'
																			id="payment_method_id_1003443953"
																			class="input-radio" name="payment_method_id"
																			type="radio" value="1003443953" />
																	</div>
																	<div class='radio-content-input'>
																		<img class='main-img'
																			src="https://hstatic.net/0/0/global/design/seller/image/payment/alepay.svg?v=6" />
																		<div>
																			<span class="radio-label-primary">Thanh toán
																				online
																				hoặc trả góp bằng thẻ tín dụng</span>
																			<span class='quick-tagline hidden'></span>
																		</div>
																	</div>
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="step-footer" id="step-footer-checkout">
										<form id="form_next_step" accept-charset="UTF-8" method="post">
											<input name="utf8" type="hidden" value="✓">
											<button type="submit" class="step-footer-continue-btn btn">
												<span class="btn-content">Hoàn tất đơn hàng</span>
												<i class="btn-spinner icon icon-button-spinner"></i>
											</button>
										</form>
									</div>
								</div>
							</div>
							<div class="hrv-coupons-popup">
								<div class="hrv-title-coupons-popup">
									<p>Chọn giảm giá <span class="count-coupons"></span></p>
									<div class="hrv-coupons-close-popup">
										<svg width="18" height="18" viewBox="0 0 18 18" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M17.1663 2.4785L15.5213 0.833496L8.99968 7.35516L2.47801 0.833496L0.833008 2.4785L7.35468 9.00016L0.833008 15.5218L2.47801 17.1668L8.99968 10.6452L15.5213 17.1668L17.1663 15.5218L10.6447 9.00016L17.1663 2.4785Z"
												fill="#424242"></path>
										</svg>
									</div>
								</div>
								<div class="hrv-content-coupons-code">
									<h3 class="coupon_heading">Mã giảm giá của shop</h3>
									<div class="hrv-discount-code-web">
									</div>
									<div class="hrv-discount-code-external">

									</div>
								</div>
							</div>
							<div class="hrv-coupons-popup-site-overlay"></div>
						</div>
					</div>
				</div>
			</div>
