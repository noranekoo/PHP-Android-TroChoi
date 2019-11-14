<script>
    $(document).on('click','#sa-warning',function(e){
      e.preventDefault();
      var ch = $(this);
      Swal.fire({
          title: "CẢNH BÁO",
          text: "Bạn có chắc chắn muốn xóa?",
          type: "warning",
          showCancelButton: !0,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Ok",
          cancelButtonText: "Không"
      }).then(function(t) {
         if(t.value){
          ch.parent().submit()}
          })
    })
</script>