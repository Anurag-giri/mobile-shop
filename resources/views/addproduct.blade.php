@include('navbar')

    <section class="tracking_box_area section_gap" style="margin-top:-5%;"> 
        <div class="container">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="tracking_box_inner ">
                <form method="post" action="{{url("saveProductDetails")}}" class="row tracking_form" enctype="multipart/form-data" autocomplete="off">    
                    @csrf
                    <div class="row col-lg-12 form-group" style="padding-top:10%;">
                        <div class="col-md-3 form-group">
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
                            <span style="padding-top:10px;"> Mobile RAM -  </span>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control" id="mobile_ram" name="mobile_ram" placeholder="Monile RAM">
                        </div>

                        <div class="col-md-3 form-group">
                            <span style="padding-top:10px;"> Mobile ROM -  </span>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control" id="mobile_rom" name="mobile_rom" placeholder="Mobile ROM">
                        </div>
                    </div>

                     <div class="row col-lg-12 form-group">
                        <div class="col-md-3 form-group">
                            <span style="padding-top:10px;"> Expandable Memory -  </span>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control" id="mobile_expandable_memory" name="mobile_expandable_memory" placeholder="Mobile Expandable Memory">
                        </div>

                        <div class="col-md-3 form-group">
                            <span style="padding-top:10px;"> Display Type -  </span>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control" id="mobile_display_type" name="mobile_display_type" placeholder="Mobile Display Type">
                        </div>
                    </div>

                    <div class="row col-lg-12 form-group">
                        <div class="col-md-4 form-group">
                            <span style="padding-top:10px;"> Description Of Product -  </span>
                        </div>

                        <div class="col-md-8 form-group">
                            <input type="textbox" class="form-control" id="mobile_description" name="mobile_description" placeholder="Mobile Description">
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
                            <span style="padding-top:10px;"> Mobile Color -  </span>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control" id="mobile_color" name="mobile_color" placeholder="Mobile Color" />
                        </div>

                        <div class="col-md-3 form-group">
                            <span style="padding-top:10px;"> Accessories Type -  </span>
                        </div>
                         <div class="col-md-3 form-group">
                            <select name="accessories_type" id="accessories_type">
                                <option> Select Accessories </option>
                                <option value="mobile"> Mobile </option>
                                <option value="tablet"> Tablet </option>
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
    </section>

    <!--================ start footer Area  =================-->
    @include("footer")
    <script src="{{ asset('product/addproduct.js') }}"></script>
