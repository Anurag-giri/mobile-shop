    @include('navbar')
    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
            <div class="latest_product_inner">
                @foreach($productData as $key => $value)
                 <?php
                    // $images_data = $value['images'][0];
                    // $image_path = $images_data->image_path."/".$images_data->image_name;
                    $imagesArr = array();
                    foreach($value['images'] as $imgkey => $image) {
                       $imagesArr[$key][$imgkey]['image_id'] = $image->image_id;
                       $imagesArr[$key][$imgkey]['image_name'] = $image->image_path."/".$image->image_name;
                       $imagesArr[$key][$imgkey]['image_path'] = $image->image_path;
                    }
                  ?>
                    <div class="row">
                      <div class="col-lg-4 col-md-12">
                        <div class="single-product">
                          <div class="product-img">
                            <a href="{{url('productDetails')}}?id=<?php echo $value['id']; ?>">
                              <img class="card-img" src="{{ asset($imagesArr[$key][0]['image_name']) }}" alt="" />
                            </a>
                            <div class="p_icon">
                              <a href="#">
                                <i class="ti-eye"></i>
                              </a>
                              <a href="#">
                                <i class="ti-heart"></i>
                              </a>
                              <a href="#">
                                <i class="ti-shopping-cart"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6">
                            <a href="#" class="d-block">
                              <h4 class="mobile_name"> 
                                {{ $value['mobile_name'] }} {{$value['mobile_version']}}
                                ( {{$value['mobile_color']}} ) 
                              </h4>
                            </a>
                         <div>

                         @if($value['mobile_ram'] && $value['mobile_ram'] > 0)
                          <div class="ram_rom_div">
                            <span class="space"> . &nbsp; </span>
                              @if($value['mobile_ram'] && $value['mobile_ram'] > 0)
                                  {{ $value['mobile_ram'] }}GB RAM |
                              @endif

                              @if($value['mobile_rom'] && $value['mobile_rom'] > 0)
                                  {{ $value['mobile_rom'] }}GB ROM 
                              @endif
                              <br/>
                              <span class="space"> . &nbsp; </span>
                              @if($value['mobile_expandable_memory'] && $value['mobile_expandable_memory'] > 0)
                                Expandable{{ $value['mobile_expandable_memory'] }}GB
                              @endif
                          </div>
                        @endif

                          <span class="space"> . &nbsp; </span> 
                            {{ $value['mobile_display_size'] }} inch
                              @if($value['mobile_display_type']!='NA') {{$value['mobile_display_type']}} 
                              @endif
                          <br/>

                          @if($value['mobile_rear_camera'] > 0)
                            <span class="space"> . &nbsp; </span>                           
                                {{ $value['mobile_rear_camera'] }}MP |  {{$value['mobile_front_camera']}}MP Front Camera                             
                            <br/>
                          @endif
                          <span class="space"> . &nbsp; </span> {{$value['mobile_battery_capacity']}}mh Battery <br/>
                          <span class="space"> . &nbsp; </span> 
                             {{$value['mobile_warrantee']}} year warranty provided by the manufacturer data of purchase <br/>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6">
                        <div>
                          <span class="mr-4"> 
                            <i id="rupeesSignMark" class="fa">&#xf156;</i> 
                              {{ $value['mobile_price'] }} 
                          </span>
                         <div>
                             <del> <i id="" class="fa">&#xf156;</i> 3000 </del>
                         </div>
                         <div>
                           <p> No Cost EMI </p>
                         </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
              </div>
            </div>

          <div class="col-lg-3">
            <div class="left_sidebar_area">
              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Browse Categories</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    @foreach($category as $val)
                        <li>
                        <a href="#"> {{ ucfirst($val->mobile_category_name) }} </a>
                        </li>
                    @endforeach
                  </ul>
                </div>
              </aside>

              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Product Brand</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                   @foreach($data as $val)
                        <li>
                        <a href="#"> {{ ucfirst($val->mobile_brand) }} </a>
                        </li>
                    @endforeach
                  </ul>
                </div>
              </aside>

              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Color Filter</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <li>  
                      <a href="#"> Black </a>
                    </li>
                    <li>
                      <a href="#"> White </a>
                    </li>
                  </ul>
                </div>
              </aside>

              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Price Filter</h3>
                </div>
                <div class="widgets_inner">
                  <div class="range_item">
                    <div id="slider-range"></div>
                    <div class="">
                      <label for="amount">Price : </label>
                      <input type="text" id="amount" readonly />
                    </div>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--================ start footer Area  =================-->
    @include("footer")