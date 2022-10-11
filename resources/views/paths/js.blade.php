
 
 
{{-- GRAPH D3 --}}
<script src="https://d3js.org/d3.v7.min.js"></script>

{{-- MAP LEAFLET --}}
<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
crossorigin=""></script>

{{-- <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script> --}}

{{-- Leaflet layer control style --}}
<script src="{{ asset('userinterface/dist/js/styledLayerControl.js') }}"></script>

{{-- Leaflet mastercluster --}}
<script src="{{ asset('userinterface/dist/js/leaflet.markercluster.js') }}"></script>

{{-- ALL SCRIPTS & GEOJSON FILES --}}
{{-- @switch(Session::get('curPage'))
    @case('profile_residential')
        <script src="{{ asset('userinterface/dist/js/map/map_residential.js') }}"></script>
        @break
    @case('profile_business')
        <script src="{{ asset('userinterface/dist/js/map/map_business.js') }}"></script>
        @break
    @case('profile_crime')
        <script src="{{ asset('userinterface/dist/js/map/map_crime.js') }}"></script>
        @break
    @case('profile_power')
        <script src="{{ asset('userinterface/dist/js/map/map_power.js') }}"></script>
        @break
    @case('profile_water')
        <script src="{{ asset('userinterface/dist/js/map/map_water.js') }}"></script>
        @break
    @case('profile_hr')
        <script src="{{ asset('userinterface/dist/js/map/map_hr.js') }}"></script>
        @break
    @case('profile_transportation')
        <script src="{{ asset('userinterface/dist/js/map/map_transportation.js') }}"></script>
        @break
    @case('allmaps')
        <script src="{{ asset('userinterface/dist/js/map/allmaps.js') }}"></script>
        <script src="{{ asset('userinterface/dist/js/map/allmapscoreversion.js') }}"></script>
        @break
    @case('dashboard')
        <script src="{{ asset('userinterface/dist/js/graphs/crime/line.js') }}"></script>
        <script src="{{ asset('userinterface/dist/js/graphs/crime/barstack.js') }}"></script>
        <script src="{{ asset('userinterface/dist/js/graphs/business/pie_business.js') }}"></script>
        <script src="{{ asset('userinterface/dist/js/graphs/business/stack_business.js') }}"></script>
        <script src="{{ asset('userinterface/dist/js/graphs/human_resource/hr_barstack.js') }}"></script>
        <script src="{{ asset('userinterface/dist/js/graphs/residence/residence_bar_gender.js') }}"></script>
        <script src="{{ asset('userinterface/dist/js/graphs/residence/residence_bar_age.js') }}"></script>
        <script src="{{ asset('userinterface/dist/js/graphs/transportation/trans_bar.js') }}"></script>
        <script src="{{ asset('userinterface/dist/js/graphs/water/water_consumption.js') }}"></script>
        <script src="{{ asset('userinterface/dist/js/graphs/power/power_consumption.js') }}"></script>
        @break
@endswitch --}}
<script src="{{ asset('userinterface/dist/js/map/map.js') }}"></script>




{{-- icons --}}
<script src="https://kit.fontawesome.com/ef77a65c1c.js" crossorigin="anonymous"></script>

{{-- Adminlte --}}
<!-- jQuery -->
<script src="{{ asset('userinterface/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('userinterface/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
 $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Bootstrap 4 -->
<script src="{{ asset('userinterface/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- overlayScrollbars -->
<script src="{{ asset('userinterface/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('userinterface/dist/js/adminlte.js') }}"></script>
<!-- bs-custom-file-input -->
<script src="{{ asset('userinterface/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('userinterface/plugins/select2/js/select2.full.min.js') }}"></script>
{{-- <!-- Bootstrap4 Duallistbox -->
<script src="{{ asset('userinterface/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
 --}}
{{-- datatables --}}
{{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> --}}




<script src="{{ asset('userinterface/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('userinterface/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('userinterface/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('userinterface/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('userinterface/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('userinterface/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('userinterface/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('userinterface/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('userinterface/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('userinterface/plugins/datatables/buttons.colVis.min.js') }}"></script>











