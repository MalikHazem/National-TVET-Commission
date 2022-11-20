$('#file').bind('change', function() {

    //this.files[0].size gets the size of your file.
    alert(this.files[0].size);
    console.log(this.files[0].size);
    document.getElementById("size") = this.files[0].size
  });
