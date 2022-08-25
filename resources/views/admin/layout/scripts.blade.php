<script src="{{ asset('admin/assets/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('admin/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('admin/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('admin/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('admin/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('admin/dist/js/custom.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="{{ asset('admin/assets/node_modules/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('admin/assets/node_modules/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('admin/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Popup message jquery -->
    <script src="{{ asset('admin/assets/node_modules/toast-master/js/jquery.toast.js') }}"></script>
    <script src="{{ asset('admin/dist/js/custom.min.js') }}"></script>
    <script src="{{ asset('admin/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('admin/assets/node_modules/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('admin/dist/js/dashboard1.js') }}"></script>
    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="{{ asset('admin/assets/node_modules/tinymce/tinymce.min.js') }}"></script>
    <script>
        $(function() {
    
            if ($("#mymce").length > 0) {
                tinymce.init({
                    selector: "textarea#mymce",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
    
                });
            }
        });
        </script>