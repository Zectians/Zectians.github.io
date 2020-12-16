<script>
//mencari id dokumen yang akan dimuat javascriptnya
$(document).ready(function() {
    // memberi warna merah pada target1
$("#target1").css("color", "red");
//mendisable action pada item target 1 
$("#target1").prop("disabled", true); 
//menghapus target ke 4
$("#target4").remove(); 
//memasukkan target2 ke right-well
$("#target2").appendTo("#right-well"); 
//mengclone target 5 lalu memasukkan ke left-well
$("#target5").clone().appendTo("#left-well"); 
$("#target1").parent().css("background-color", "red");
//mengubah tulisan di right well menjadi orange
$("#right-well").children().css("color", "orange");
//mengubah warna tulisan di right well menjadi hijau
$("#left-well").children().css("color", "green"); 
//memilih target pada index ke 2(target3 dan target6) menambahkan class animated bounce
$(".target:nth-child(2)").addClass("animated bounce");
//memilih target pada index genap kemudian menambahkan class animated shake
$(".target:even").addClass("animated shake");

});
</script>
<!-- membuat div dengan class container-fuid -->
<div class="container-fluid">
<!-- memberikan elemen heading 3 yang bertuliskan jQuery Playground -->
<h3 class="text-primary text-center">jQuery Playground</h3>
<!-- memberikan kelas row -->
<div class="row">
<!-- memberikan kelas col dan breakpoint 6 pada screen extra small -->
<div class="col-xs-6">
<!-- memberikan elemen heading 4 dengan tulisan #left-well -->
<h4>#left-well</h4> 
<!-- memberikan kelas well dengan id left-well -->
<div class="well" id="left-well">
<!-- memberikan elemen tombol dengan id target 1 -->
<button class="btn btn-default target" id="target1">#target1</button>
<!-- memberikan elemen tombol dengan id target 2 -->
<button class="btn btn-default target" id="target2">#target2</button>
<!-- memberikan elemen tombol dengan id target 3 -->
<button class="btn btn-default target" id="target3">#target3</button>
</div>
</div>
<!-- memberikan kelas col dan breakpoint 6 pada screen extra small -->
<div class="col-xs-6">
<!-- memberikan elemen heading 4 dengan tulisan #right-well -->
<h4>#right-well</h4>
<!-- memberikan kelas well dengan id right-well -->
<div class="well" id="right-well">
<!-- memberikan elemen tombol dengan id target 4 -->
<button class="btn btn-default target" id="target4">#target4</button>
<!-- memberikan elemen tombol dengan id target 5 -->
<button class="btn btn-default target" id="target5">#target5</button>
<!-- memberikan elemen tombol dengan id target 6 -->
<button class="btn btn-default target" id="target6">#target6</button>
</div>
</div>
</div>
</div>