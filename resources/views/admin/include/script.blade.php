<script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{ asset('') }}assets/js/jquery.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="{{ asset('') }}assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ asset('') }}assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="{{ asset('') }}assets/plugins/chartjs/js/Chart.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/chartjs/js/Chart.extension.js"></script>
	<script src="{{ asset('') }}assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
	<!--notification js -->
	<script src="{{ asset('') }}assets/plugins/notifications/js/lobibox.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/notifications/js/notifications.min.js"></script>
	<script src="{{ asset('') }}assets/js/index2.js"></script>
	


	
	
	
	<script src="{{ asset('') }}assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	
	
	<!--app JS-->
	
        <!--app JS-->



	<!--plugins-->
	<script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">
	</script>

<script src="{{ asset('') }}assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
<script src="{{ asset('') }}assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
<script src="{{ asset('') }}assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
<script src="{{ asset('') }}assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
<script src="{{ asset('') }}assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>


	<script src="https://unpkg.com/feather-icons"></script>

	<script>
		feather.replace()
	</script>

	<script>
		tinymce.init({
		  selector: '#mytextarea'
		});
	</script>

<script>
	$('#fancy-file-upload').FancyFileUpload({
		params: {
			action: 'fileuploader'
		},
		maxfilesize: 1000000
	});
</script>
<script>
	$(document).ready(function () {
		$('#image-uploadify').imageuploadify();
	})
</script>

	<!--app JS-->


	<script src="{{ asset('') }}assets/js/app.js"></script>