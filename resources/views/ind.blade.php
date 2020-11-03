@include('navbar')

<div class="main_menu">
      <div class="container">
	<div class="row w-100 mr-0 pull-right">
	  <div class="col-lg-7 pr-0">
	  	<form method="post" action="{{url("saveProductDetails")}}" class="row tracking_form" enctype="multipart/form-data" autocomplete="off">    
                    @csrf
                <div class="row col-lg-12 form-group">
                        <div class="col-md-6 form-group">
                            <span style="padding-top:10px;"> Mobile Name -  </span>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control" id="mobile_name" name="mobile_name" placeholder="Mobile Name">
                        </div>

                        <div class="col-md-3 form-group">
                            <span style="padding-top:10px;"> Mobile Price -  </span>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control" id="mobile_price" name="mobile_price" placeholder="Mobile Price">
                        </div>
                    </div>

                    <div class="row col-lg-12 form-group">
                        <div class="col-md-3 form-group">
                            <span style="padding-top:10px;"> Display Size -  </span>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control" id="mobile_display_size" name="mobile_display_size" placeholder="Display Size">
                        </div>

                        <div class="col-md-3 form-group">
                            <span style="padding-top:10px;"> Rear Camera -  </span>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control" id="mobile_rear_camera" name="mobile_rear_camera" placeholder="Rear Camera">
                        </div>
                    </div>

                    <div class="row col-lg-12 form-group">
                        <div class="col-md-3 form-group">
                            <span style="padding-top:10px;"> Battery -  </span>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control" id="mobile_battery_size" name="mobile_battery_size" placeholder="Battery Size">
                        </div>

                        <div class="col-md-3 form-group">
                            <span style="padding-top:10px;"> Warranty -  </span>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control" id="mobile_warranty" name="mobile_warranty" placeholder="Mobile Warranty">
                        </div>
                    </div>

                    <div class="row col-lg-12 form-group">
                        <div class="col-md-3 form-group">
                            <span style="padding-top:10px;"> Front-Camera -  </span>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control" id="mobile_front_camera" name="mobile_front_camera" placeholder="Front Camera">
                        </div>

                        <div class="col-md-3 form-group">
                            <span style="padding-top:10px;"> Available Mobile In Stock -  </span>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control" id="mobile_available_in_stock" name="mobile_available_in_stock" placeholder="Mobile Available In Stock">
                        </div>
                    </div>

                    <div class="row col-lg-12 form-group">
                        <div class="col-md-3 form-group">
                            <span style="padding-top:10px;"> Version -  </span>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control" id="mobile_version" name="mobile_version" placeholder="Mbile Version">
                        </div>
                        <div class="col-md-3 form-group">
                            <span style="padding-top:10px;"> EMI Option -  </span>
                        </div>
                        <div class="col-md-3 form-group">
                            <select name="mobile_emi_option" id="emi_option">
                                <option> Select EMI </option>
                                <option value="0"> No </option>
                                <option value="1"> Yes </option>
                            </select>
                        </div>

                        <div class="col-md-3 form-group">
                            <span style="padding-top:10px;"> Mobile Image -  </span>
                        </div>
                        <div class="col-md-9 form-group">
                            <input type="file" class="form-control" id="mobile_images" name="mobile_images[]" enctype="multipart/form-data" multiple>
                        </div>
                    </div>

                    <div class="col-md-12 form-group">
                        <button class="btn submit_btn" type="submit"> Save Detail </button>
                    </div>
                    <input type="hidden" value="{{ url('saveProductDetails') }}" id="save_url">
                </form>
            </div>
	  </div>
	</div>
</div>
</div>