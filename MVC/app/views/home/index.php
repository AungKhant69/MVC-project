<?php require_once APPROOT . "/views/inc/header.php"; ?>
<?php require_once APPROOT . "/views/inc/nav.php"; ?>


<!-- <h1>Post panel</h1> -->

<div class="container-fluid mt-3">
    <div class="container">

        <!-- <a href="" class="btn btn-primary mb-3">To Create New Post</a> -->
        <div class="row">
            
            <div class="col-md-4 me-5 ms-3">
        
            <h2 class="text-dark  ms-4 text-center">Our Available Courses</h2>
                <ul class="list-group">

                    <?php foreach ($data as $cat) : ?>
                        <li class="list-group-item ">
                        <a href="<?php echo URLROOT . 'detail/homedetail/' . $cat->id; ?>"><?php echo $cat->name; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>


            <div class="col-md-7 off-set-0 pt-5">
                <div class="card mb-3">
                    <div class="card-block p-3 bg-dark pt-4">
                        <div class="d-flex justify-content-between ">
                            <p class="text-white">Our members and patreons</p>
                            <a href="<?php echo URLROOT . 'detail/homedetail/1'; ?>" class="text-white"> Click Here to view all courses»</a>
                        </div>
                    </div>
                </div> 
                <div class="row mb-3 ">
                    <img src="assets/imgs/Tzuyu-TWICE.jpg" style="width:165px;">
                    <img src="assets/imgs/main-qimg-becacccec5d89cc06a3ef847f15e9e31-lq.jfif" style="width:165px;">                 
                    <img src="assets/imgs/kep1er-chaehyun.jpg" style="width:165px;">
                    <img src="assets/imgs/f7eaebd92f9e6181379dc677d384f7cf.png" style="width:167px;">
                </div>
                <div class="row mb-3">
                  
                  <img src="assets/imgs/111.jfif" style="width:165px; height:143px;">
                  <img src="assets/imgs/main-qimg-be3e5eae515aa199530e19f6885d6b08-lq.jfif" style="width:165px; height:143px;">
                  <img src="assets/imgs/main-qimg-19fe2eea549a104d2ccbebcdb996142e-lq.jfif" style="width:165px; height:143px;">
                  <img src="assets/imgs/main-qimg-1d8d0c11a62c010fc353aafbbca1dfc7-lq.jfif" style="width:167px; height:143px;">
    
                </div>
            </div>
        </div>
    </div>

    <?php require_once APPROOT . "/views/inc/footer.php"; ?>