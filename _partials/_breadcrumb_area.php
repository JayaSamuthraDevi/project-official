<!-- Breadcrumb area Start -->
<section class="page-title-area bg-image ptb--80" data-bg-image="assets/img/bg/page_title_bg.jpg">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="page-title"><?php echo isset($page) ? $page: ""; ?></h1>
        <ul class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li class="current"><span><?php echo isset($page) ? $page : ""; ?></span></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Breadcrumb area End -->