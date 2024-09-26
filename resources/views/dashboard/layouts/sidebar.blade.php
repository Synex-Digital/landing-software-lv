<!--**********************************
            Sidebar start
        ***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="{{ route('welcome') }}" class="ai-icon" aria-expanded="false">
                    <svg width="26px" height="26px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5"
                            d="M2 6.21053C2 4.22567 2 3.23323 2.65901 2.61662C3.31802 2 4.37868 2 6.5 2C8.62132 2 9.68198 2 10.341 2.61662C11 3.23323 11 4.22567 11 6.21053V17.7895C11 19.7743 11 20.7668 10.341 21.3834C9.68198 22 8.62132 22 6.5 22C4.37868 22 3.31802 22 2.65901 21.3834C2 20.7668 2 19.7743 2 17.7895V6.21053Z"
                            fill="#1C274C" />
                        <path
                            d="M13 15.4C13 13.3258 13 12.2887 13.659 11.6444C14.318 11 15.3787 11 17.5 11C19.6213 11 20.682 11 21.341 11.6444C22 12.2887 22 13.3258 22 15.4V17.6C22 19.6742 22 20.7113 21.341 21.3556C20.682 22 19.6213 22 17.5 22C15.3787 22 14.318 22 13.659 21.3556C13 20.7113 13 19.6742 13 17.6V15.4Z"
                            fill="#1C274C" />
                        <path
                            d="M13 5.5C13 4.4128 13 3.8692 13.1713 3.44041C13.3996 2.86867 13.8376 2.41443 14.389 2.17761C14.8024 2 15.3266 2 16.375 2H18.625C19.6734 2 20.1976 2 20.611 2.17761C21.1624 2.41443 21.6004 2.86867 21.8287 3.44041C22 3.8692 22 4.4128 22 5.5C22 6.5872 22 7.1308 21.8287 7.55959C21.6004 8.13133 21.1624 8.58557 20.611 8.82239C20.1976 9 19.6734 9 18.625 9H16.375C15.3266 9 14.8024 9 14.389 8.82239C13.8376 8.58557 13.3996 8.13133 13.1713 7.55959C13 7.1308 13 6.5872 13 5.5Z"
                            fill="#1C274C" />
                    </svg>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a href="{{ route('landing-page.index') }}" class="ai-icon" aria-expanded="false">
                    <svg width="26px" height="26px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.87868 2.87868C5 3.75736 5 5.17157 5 8V16C5 18.8284 5 20.2426 5.87868 21.1213C6.75736 22 8.17157 22 11 22H13C15.8284 22 17.2426 22 18.1213 21.1213C19 20.2426 19 18.8284 19 16V8C19 5.17157 19 3.75736 18.1213 2.87868C17.2426 2 15.8284 2 13 2H11C8.17157 2 6.75736 2 5.87868 2.87868ZM8.25 17C8.25 16.5858 8.58579 16.25 9 16.25H12C12.4142 16.25 12.75 16.5858 12.75 17C12.75 17.4142 12.4142 17.75 12 17.75H9C8.58579 17.75 8.25 17.4142 8.25 17ZM9 12.25C8.58579 12.25 8.25 12.5858 8.25 13C8.25 13.4142 8.58579 13.75 9 13.75H15C15.4142 13.75 15.75 13.4142 15.75 13C15.75 12.5858 15.4142 12.25 15 12.25H9ZM8.25 9C8.25 8.58579 8.58579 8.25 9 8.25H15C15.4142 8.25 15.75 8.58579 15.75 9C15.75 9.41421 15.4142 9.75 15 9.75H9C8.58579 9.75 8.25 9.41421 8.25 9Z"
                            fill="#1C274C" />
                        <path opacity="0.5"
                            d="M5.23525 4.05811C5 4.94139 5 6.17689 5 7.99985V15.9999C5 17.8229 5 19.0584 5.23527 19.9417L5 19.9238C4.02491 19.8279 3.36857 19.6111 2.87868 19.1212C2 18.2425 2 16.8283 2 13.9999V9.99991C2 7.17148 2 5.75726 2.87868 4.87859C3.36857 4.3887 4.02491 4.17194 5 4.07602L5.23525 4.05811Z"
                            fill="#1C274C" />
                        <path opacity="0.5"
                            d="M18.7646 19.9417C18.9999 19.0584 18.9999 17.8229 18.9999 15.9999V7.99985C18.9999 6.17689 18.9999 4.94139 18.7647 4.05811L18.9999 4.07602C19.975 4.17194 20.6314 4.3887 21.1212 4.87859C21.9999 5.75726 21.9999 7.17148 21.9999 9.99991V13.9999C21.9999 16.8283 21.9999 18.2425 21.1212 19.1212C20.6314 19.6111 19.975 19.8279 18.9999 19.9238L18.7646 19.9417Z"
                            fill="#1C274C" />
                    </svg>
                    <span class="nav-text">Landing Page</span>
                </a>
            </li>
            {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="patient.html">Patient</a></li>
                    <li><a href="patient-details.html">Patient Details</a></li>
                    <li><a href="doctor.html">Doctors</a></li>
                    <li><a href="doctor-details.html">Doctor Details</a></li>
                    <li><a href="reviews.html">Reviews</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="app-profile.html">Profile</a></li>
                    <li><a href="post-details.html">Post Details</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="email-compose.html">Compose</a></li>
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="app-calender.html">Calendar</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                        <ul aria-expanded="false">
                            <li><a href="ecom-product-grid.html">Product Grid</a></li>
                            <li><a href="ecom-product-list.html">Product List</a></li>
                            <li><a href="ecom-product-detail.html">Product Details</a></li>
                            <li><a href="ecom-product-order.html">Order</a></li>
                            <li><a href="ecom-checkout.html">Checkout</a></li>
                            <li><a href="ecom-invoice.html">Invoice</a></li>
                            <li><a href="ecom-customers.html">Customers</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text">Charts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="chart-flot.html">Flot</a></li>
                    <li><a href="chart-morris.html">Morris</a></li>
                    <li><a href="chart-chartjs.html">Chartjs</a></li>
                    <li><a href="chart-chartist.html">Chartist</a></li>
                    <li><a href="chart-sparkline.html">Sparkline</a></li>
                    <li><a href="chart-peity.html">Peity</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Bootstrap</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="ui-accordion.html">Accordion</a></li>
                    <li><a href="ui-alert.html">Alert</a></li>
                    <li><a href="ui-badge.html">Badge</a></li>
                    <li><a href="ui-button.html">Button</a></li>
                    <li><a href="ui-modal.html">Modal</a></li>
                    <li><a href="ui-button-group.html">Button Group</a></li>
                    <li><a href="ui-list-group.html">List Group</a></li>
                    <li><a href="ui-media-object.html">Media Object</a></li>
                    <li><a href="ui-card.html">Cards</a></li>
                    <li><a href="ui-carousel.html">Carousel</a></li>
                    <li><a href="ui-dropdown.html">Dropdown</a></li>
                    <li><a href="ui-popover.html">Popover</a></li>
                    <li><a href="ui-progressbar.html">Progressbar</a></li>
                    <li><a href="ui-tab.html">Tab</a></li>
                    <li><a href="ui-typography.html">Typography</a></li>
                    <li><a href="ui-pagination.html">Pagination</a></li>
                    <li><a href="ui-grid.html">Grid</a></li>

                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Plugins</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="uc-select2.html">Select 2</a></li>
                    <li><a href="uc-nestable.html">Nestedable</a></li>
                    <li><a href="uc-noui-slider.html">Noui Slider</a></li>
                    <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                    <li><a href="uc-toastr.html">Toastr</a></li>
                    <li><a href="map-jqvmap.html">Jqv Map</a></li>
                    <li><a href="uc-lightgallery.html">Lightgallery</a></li>
                </ul>
            </li>
            <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Widget</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Forms</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="form-element.html">Form Elements</a></li>
                    <li><a href="form-wizard.html">Wizard</a></li>
                    <li><a href="form-editor-summernote.html">Summernote</a></li>
                    <li><a href="form-pickers.html">Pickers</a></li>
                    <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Table</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                    <li><a href="table-datatable-basic.html">Datatable</a></li>
                </ul>
            </li> --}}
            <li><a class="" href="{{ route('appearance') }}" aria-expanded="false">
                    <svg width="26px" height="26px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.75 19C7.75 19.4142 7.41421 19.75 7 19.75H5C4.58579 19.75 4.25 19.4142 4.25 19C4.25 18.5858 4.58579 18.25 5 18.25H7C7.41421 18.25 7.75 18.5858 7.75 19Z"
                            fill="#1C274C" />
                        <path opacity="0.4"
                            d="M10 18V6C10 4.59987 10 3.8998 9.72752 3.36502C9.48783 2.89462 9.10538 2.51217 8.63498 2.27248C8.1002 2 7.40013 2 6 2C4.59987 2 3.8998 2 3.36502 2.27248C2.89462 2.51217 2.51217 2.89462 2.27248 3.36502C2 3.8998 2 4.59987 2 6V18C2 19.4001 2 20.1002 2.27248 20.635C2.51217 21.1054 2.89462 21.4878 3.36502 21.7275C3.8998 22 4.59987 22 6 22C7.40013 22 8.1002 22 8.63498 21.7275C9.10538 21.4878 9.48783 21.1054 9.72752 20.635C10 20.1002 10 19.4001 10 18Z"
                            fill="#1C274C" />
                        <g opacity="0.7">
                            <path
                                d="M10 8.24276V18C10 18.9186 10 19.5359 9.92304 20.0029L13.2219 16.7041L19.0599 10.6145C20.0332 9.6111 20.5199 9.10939 20.6964 8.53425C20.847 8.04375 20.843 7.5188 20.685 7.03065C20.4997 6.45826 19.9999 5.95847 19.0003 4.95892C18.0991 4.07259 17.6484 3.62942 17.1204 3.44458C16.6857 3.29244 16.2175 3.2633 15.7673 3.36039C15.2204 3.47834 14.7183 3.86221 13.7141 4.62996L13 5.24276L10 8.24276Z"
                                fill="#1C274C" />
                            <path d="M8.00288 21.923C8.00192 21.9232 8.00096 21.9234 8 21.9235V21.9259L8.00288 21.923Z"
                                fill="#1C274C" />
                        </g>
                        <path
                            d="M15.8143 14H17.8994C19.2995 14 19.9996 14 20.5344 14.2725C21.0048 14.5122 21.3872 14.8946 21.6269 15.365C21.8994 15.8998 21.8994 16.5999 21.8994 18C21.8994 19.4001 21.8994 20.1002 21.6269 20.635C21.3872 21.1054 21.0048 21.4878 20.5344 21.7275C19.9996 22 19.2995 22 17.8994 22H6C6.91721 22 7.53399 22 8.00069 21.9234L8 21.9259L8.00288 21.923C8.24762 21.8827 8.45107 21.8212 8.63498 21.7275C9.10538 21.4878 9.48783 21.1054 9.72752 20.635C9.82122 20.4511 9.8827 20.2476 9.92304 20.0029L13.2219 16.7041L15.8143 14Z"
                            fill="#1C274C" />
                    </svg>
                    <span class="nav-text">Appearance</span>
                </a>
            </li>
        </ul>

        <div class="copyright">
            <p><strong>Synex</strong> © 2024 All Rights Reserved</p>
            <p>developed <span class="heart"></span> by SynexDigital</p>
        </div>
    </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->
