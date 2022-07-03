<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; {{ date('Y') }}.
    </div>
    <div class="footer-right">
        Versi 1.0
    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

{{-- sweet alert --}}
<script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>

{{-- Bootstrap bundle --}}
<script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>

<script src="{{ asset('stisla/assets/js/stisla.js') }}"></script>
{{--
<!-- JS Libraies -->
<script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="../node_modules/chart.js/dist/Chart.min.js"></script>
<script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
<script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script> --}}

<!-- Template JS File -->
<script src="{{ asset('stisla/assets/js/scripts.js') }}"></script>
<script src="{{ asset('stisla/assets/js/custom.js') }}"></script>

<!-- Page Specific JS File -->


<!-- Page Specific JS File -->
<script src="{{ asset('stisla/pages/bootstrap-modal.html') }}"></script>

<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

{{-- Dropzone cdn --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js" integrity="sha512-VQQXLthlZQO00P+uEu4mJ4G4OAgqTtKG1hri56kQY1DtdLeIqhKUp9W/lllDDu3uN3SnUNawpW7lBda8+dSi7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@if (request()->segment(2) == 'pembayaran' || request()->segment(2) == 'cicil' || request()->segment(2) == 'lunas' || request()->segment(2) == 'cuti')
{{-- script dropzone --}}
<script src="{{ asset('js/my_dropzone.js') }}"></script>
@endif

{{-- Datatable js --}}

<!-- JS Libraies -->
<script src="{{ asset('plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-select/js/dataTables.select.min.js') }}"></script>

</body>
</html>
