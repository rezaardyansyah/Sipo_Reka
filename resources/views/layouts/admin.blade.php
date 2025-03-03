<!doctype html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <title>@yield('title')</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Berry is trending dashboard template made using Bootstrap 5 design framework. Berry is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies."
    />
    <meta
      name="keywords"
      content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard"
    />
    <meta name="author" content="codedthemes" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- [Favicon] icon -->
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon" />
 <!-- [Google Font] Family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" id="main-font-link" />
<!-- [phosphor Icons] https://phosphoricons.com/ -->
<link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css" />
<!-- Bootstrap Icons-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Editor Teks Summernote -->
<link href="https://cdn.jsdelivr.net/npm/summernote/dist/summernote-lite.min.css" rel="stylesheet">
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" />
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="../assets/fonts/feather.css" />
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="../assets/fonts/fontawesome.css" />
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="../assets/fonts/material.css" />
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" />
<link rel="stylesheet" href="../assets/css/style-preset.css" />
<link rel="stylesheet" href="../assets/css/style-app.css" />
<link rel="stylesheet" href="../assets/css/dashboard.css" />
<link rel="stylesheet" href="../assets/css/user-manage.css" />
<link rel="stylesheet" href="../assets/css/data-perusahaan.css" />
<link rel="stylesheet" href="../css/superadmin.edit-profile.css" />
<link rel="stylesheet" href="../css/superadmin/arsip.css"/>
<link rel="stylesheet" href="../css/superadmin/surat.css"/>
<link rel="stylesheet" href="../css/superadmin/laporan.css"/>
<link rel="stylesheet" href="../css/superadmin/cetak-laporan.css"/>
<link rel="stylesheet" href="../css/admin/add-memo.css"/>
<link rel="stylesheet" href="../css/admin/memoAdmin.css"/>
<link rel="stylesheet" href="../css/admin/kirim-admin.css"/>
<link rel="stylesheet" href="../css/info.css"/>

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->
  <body>
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->

    <!-- Include Sidebar -->
    @include('includes.superadmin.sidebar')

    <!-- Include Navbar -->
    @include('includes.superadmin.navbar')
 
    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <!-- [ Main Content ] start -->
              @yield('content')
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->

    <footer class="pc-footer">
      <div class="footer-wrapper container-fluid">
        <div class="row">
          <div class="col-sm-6 my-1">
            <p class="m-0">
              Sipo-Reka &#9829; by Rekaindo Global Jasa
            </p>
          </div>
        </div>
      </div>
    </footer>

 <!-- Required Js -->
<script src="../assets/js/plugins/popper.min.js"></script>
<script src="../assets/js/plugins/simplebar.min.js"></script>
<script src="../assets/js/plugins/bootstrap.min.js"></script>
<script src="../assets/js/icon/custom-font.js"></script>
<script src="../assets/js/script.js"></script>
<script src="../assets/js/theme.js"></script>
<script src="../assets/js/plugins/feather.min.js"></script>
<script>
  layout_change('light');
</script>
   
<script>
  font_change('Roboto');
</script>
 
<script>
  change_box_container('false');
</script>
 
<script>
  layout_caption_change('true');
</script>
   
<script>
  layout_rtl_change('false');
</script>
 
<script>
  preset_change('preset-1');
</script>

    <!-- [Page Specific JS] start -->
    <!-- Apex Chart -->
    <script src="../assets/js/plugins/apexcharts.min.js"></script>
    <script src="../assets/js/pages/dashboard-default.js"></script>
    <!-- [Page Specific JS] end -->
    <script src="../assets/js/data.js"></script>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote/dist/summernote-lite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // SummerNote
    $(document).ready(function() {
      $('#dropdownMenuButton').on('change', function() {
          // Saat opsi dipilih, teks akan ke kiri
          $(this).css('text-align', 'left');

          // Jika kembali ke opsi default (Pilih), teks akan kembali ke center
          if($(this).val() === null || $(this).val() === "") {
              $(this).css('text-align', 'center');
          }
      });
    });

    // Hubungkan tombol "Select File" dengan input file
    document.getElementById('selectFileBtn').addEventListener('click', function () {
      document.getElementById('fileInput').click();
    });

    // Deteksi perubahan file dan aktifkan tombol Upload
    document.getElementById('fileInput').addEventListener('change', function () {
        const uploadBtn = document.getElementById('uploadBtn');
        if (this.files.length > 0) {
            uploadBtn.disabled = false;
        } else {
            uploadBtn.disabled = true;
        }
    });

    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,
            toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear', 'fontname', 'fontsize', 'color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']],
            ],
            fontNames: ['Arial', 'Courier Prime', 'Georgia', 'Tahoma', 'Times New Roman'], 
            fontNamesIgnoreCheck: ['Arial', 'Courier Prime', 'Georgia', 'Tahoma', 'Times New Roman']
        });
    });
    </script>
  </body>
  <!-- [Body] end -->
</html>
