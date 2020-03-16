@section('footer')

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
            <div class="row font-size-sm">
                <div class="col-sm-6 order-sm-1 text-center text-sm-left">
                    <a class="font-w600" href="https://1.envato.market/r6y" target="_blank">IDEA FOR WORLD</a> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->

</div>
<!-- END Page Container -->

<!--
    Dashmix JS Core

    Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
    to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

    If you like, you could also include them separately directly from the assets/js/core folder in the following
    order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

    assets/js/core/jquery.min.js
    assets/js/core/bootstrap.bundle.min.js
    assets/js/core/simplebar.min.js
    assets/js/core/jquery-scrollLock.min.js
    assets/js/core/jquery.appear.min.js
    assets/js/core/js.cookie.min.js
-->
<script src="{{url('public/theme/backend')}}/assets/js/dashmix.core.min.js"></script>

<!--
    Dashmix JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="{{url('public/theme/backend')}}/assets/js/dashmix.app.min.js"></script>


    @yield('script')
    <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Ion Range Slider + Masked Inputs + Password Strength Meter plugins) -->
    <!-- Page JS Plugins -->
    <script src="{{url('public/theme/backend')}}/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('public/theme/backend')}}/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="{{url('public/theme/backend')}}/assets/js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>

    <script src="{{url('public/theme/backend')}}/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="{{url('public/theme/backend')}}/assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="{{url('public/theme/backend')}}/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="{{url('public/theme/backend')}}/assets/js/plugins/select2/js/select2.full.min.js"></script>
    <script src="{{url('public/theme/backend')}}/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="{{url('public/theme/backend')}}/assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js"></script>
    <script src="{{url('public/theme/backend')}}/assets/js/plugins/dropzone/dropzone.min.js"></script>
    <script src="{{url('public/theme/backend')}}/assets/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js"></script>
    <script src="{{url('public/theme/backend')}}/assets/js/plugins/flatpickr/flatpickr.min.js"></script>
    <!-- Page JS Plugins -->
    <script src="{{url('public/theme/backend')}}/assets/js/plugins/jquery-bootstrap-wizard/bs4/jquery.bootstrap.wizard.min.js"></script>
    <script src="{{url('public/theme/backend')}}/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="{{url('public/theme/backend')}}/assets/js/plugins/jquery-validation/additional-methods.js"></script>

    <!-- Page JS Code -->
    <script src="{{url('public/theme/backend')}}/assets/js/pages/be_forms_wizard.min.js"></script>
    <!-- Page JS Plugins -->
    <script src="{{url('public/theme/backend')}}/assets/js/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="{{url('public/theme/backend')}}/assets/js/plugins/simplemde/simplemde.min.js"></script>
    <script src="{{url('public/theme/backend')}}/assets/js/plugins/ckeditor/ckeditor.js"></script>
    <script src="{{url('public/theme/backend')}}/assets/js/pages/be_tables_datatables.min.js"></script>
    <script>jQuery(function(){ Dashmix.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'rangeslider', 'masked-inputs', 'pw-strength','summernote', 'simplemde', 'ckeditor']); });</script>
    <script>

        var dd=1; $(".editor").each(function(){ $(this).attr("id","editor"+dd); CKEDITOR.replace( 'editor'+dd); dd=dd+1; });
    </script>

    </body>
</html>
@endsection