<script src="{{ asset('dist-admin/js/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('dist-admin/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist-admin/js/popper.min.js') }}"></script>
<script src="{{ asset('dist-admin/js/tooltip.js') }}"></script>
<script src="{{ asset('dist-admin/js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('dist-admin/js/moment.min.js') }}"></script>
<script src="{{ asset('dist-admin/js/stisla.js') }}"></script>
<script src="{{ asset('dist-admin/js/jscolor.js') }}"></script>
<script src="{{ asset('dist-admin/js/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('dist-admin/js/select2.full.min.js') }}"></script>
<script src="{{ asset('dist-admin/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dist-admin/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('dist-admin/js/iziToast.min.js') }}"></script>
<script src="{{ asset('dist-admin/js/fontawesome-iconpicker.js') }}"></script>
<script src="{{ asset('dist-admin/js/air-datepicker.min.js') }}"></script>
<script src="{{ asset('dist-admin/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('dist-admin/js/bootstrap4-toggle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('dist-admin/js/sweet-alert.js') }}"></script>

<script src="{{ asset('dist-admin/js/scripts.js') }}"></script>
<script src="{{ asset('dist-admin/js/custom.js') }}"></script>

@if(Session::has('error'))
    <script>
        iziToast.error({
            message: '{{ Session::get("error") }}',
            position: 'topRight'
        });
    </script>
@endif
@if(Session::has('success'))
    <script>
        iziToast.success({
            message: '{{ Session::get("success") }}',
            position: 'topRight'
        });
    </script>
@endif