<div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">Gallery</h1>
        </div>

        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <?php echo $kategori;?>
            <!-- <button class="btn btn-default filter-button" data-filter="hdpe">HDPE Pipes</button>
            <button class="btn btn-default filter-button" data-filter="spri-nkle">Sprinkle Pipes</button>
            <button class="btn btn-default filter-button" data-filter="spray">Spray Nozzle</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Irrigation Pipes</button> -->
        </div>
        <br/>

            <?php echo $gallery;?>

            <!-- <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <span title="hdpe"><img alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, quaerat. Perspiciatis doloribus dicta est, quisquam praesentium fugiat, atque eos, itaque obcaecati possimus aperiam et saepe, dolores sequi recusandae cumque eligendi." src="<?php echo base_url();?>assets/images/spritemap.png" class="thumbnail img-responsive"></span>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spri nkle">
                <img src="<?php echo base_url();?>assets/images/spritemap@2x.png" class="thumbnail img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="<?php echo base_url();?>Design/images/LogoYasiwa.gif" class="thumbnail img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="thumbnail img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="http://fakeimg.pl/365x365/" class="thumbnail img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="thumbnail img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="http://fakeimg.pl/365x365/" class="thumbnail img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="thumbnail img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="thumbnail img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="thumbnail img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="http://fakeimg.pl/365x365/" class="thumbnail img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spri-nkle">
                <a href="#" title="Last Image"><img src="http://fakeimg.pl/365x365/" class="thumbnail img-responsive"></a>
            </div> -->
        </div>
<!-- modal -->
<div tabindex="-1" class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
    <button class="close" type="button" data-dismiss="modal">×</button>
    <h3 class="modal-title">Heading</h3>
  </div>
  <div class="modal-body">

  </div>
  <div class="modal-footer">
    <p class="deskripsi"></p>
    <!-- <button class="btn btn-default" data-dismiss="modal">Close</button> -->
  </div>
   </div>
  </div>
</div>
<!-- /modal -->
<style type="text/css">

.gallery{
    border:0;
    background-color:#bcff8f;
}
.deskripsi{
  text-align: justify;
  font-family: Arial,Times New Roman;
  font-size: 12pt;
}  
.gallery-title
{
    //margin-top: -5px;
    font-size: 36px;
    color: #42B32F;
    text-align: center;
    font-weight: 500;
    margin-bottom: 20px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #42B32F;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #42B32F;

}
.btn-default:active .filter-button:active
{
    background-color: #42B32F;
    color: white;
}

.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}
.modal.fade {
  z-index: 99999 !important;
}
/*.modal-dialog {max-width: 600px;}*/
.thumbnail {margin-bottom:6px;}
</style>
<script type="text/javascript">
  $(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
            if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");
    });
    

$('.thumbnail').click(function(){
    $('.modal-body').empty();
    var title = $(this).parent('span').attr("title");
    var deskripsi = $(this).parent('span').attr("alt");
    console.log(deskripsi);
    $('.modal-title').html(title);
    $('.deskripsi').html(deskripsi);
    $($(this).parents('div').html()).appendTo('.modal-body');
    $('#myModal').modal({show:true});
});
});
</script>