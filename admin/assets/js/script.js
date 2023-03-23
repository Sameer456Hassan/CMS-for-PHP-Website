$(document).ready(function () {
  $('#product_table').DataTable({
    aaSorting: [],
    responsive: true,

    columnDefs: [
      {
        responsivePriority: 1,
        targets: 0,
      },
      {
        responsivePriority: 2,
        targets: -1,
      },
      {
        responsivePriority: 3,
        targets: -1,
      },
    ],
  });

  $('#summernote').summernote({
    tabsize: 2,
    height: 400,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['help']],
    ],
  });

  $('.text2 #summernote').summernote({
    tabsize: 2,
    height: 400,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['help']],
    ],
  });
  $('.text3  #summernote').summernote({
    tabsize: 2,
    height: 400,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['help']],
    ],
  });

  $('#Add_contact').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content = $('.note-editable').html();

    data.append('content', content);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/add_contact.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'success') {
          swal(
            {
              title: 'Published!',
              text: 'Published!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in uploading, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });
  $('#Update_contact').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content = $('.note-editable').html();

    data.append('content', content);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/update_contact.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'updated') {
          swal(
            {
              title: 'Updated!',
              text: 'Post has been updated!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in updating, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });

  $('#Add').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content = $('.note-editable').html();

    data.append('content', content);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/add_blog.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'success') {
          swal(
            {
              title: 'Published!',
              text: 'Published!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in uploading, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });
  $('#Update').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content = $('.note-editable').html();

    data.append('content', content);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/update.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'updated') {
          swal(
            {
              title: 'Updated!',
              text: 'Post has been updated!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in updating, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });

  $('#Add_Fifth').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content1 = $('.text1 .note-editable').html();
    let content2 = $('.text2 .note-editable').html();

    data.append('content1', content1);
    data.append('content2', content2);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/add_blog.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'success') {
          swal(
            {
              title: 'Published!',
              text: 'Published!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in uploading, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });
  $('#Update_Fifth_Section').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content1 = $('.text1 .note-editable').html();
    let content2 = $('.text2 .note-editable').html();

    data.append('content1', content1);
    data.append('content2', content2);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/update.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'updated') {
          swal(
            {
              title: 'Updated!',
              text: 'Post has been updated!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in updating, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });

  $('#Add_sixth').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content1 = $('.text1 .note-editable').html();
    let content2 = $('.text2 .note-editable').html();
    let content3 = $('.text3 .note-editable').html();

    data.append('content1', content1);
    data.append('content2', content2);
    data.append('content3', content3);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/add_blog.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'success') {
          swal(
            {
              title: 'Published!',
              text: 'Published!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in uploading, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });
  $('#Update_sixth_Section').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content1 = $('.text1 .note-editable').html();
    let content2 = $('.text2 .note-editable').html();
    let content3 = $('.text3 .note-editable').html();

    data.append('content1', content1);
    data.append('content2', content2);
    data.append('content3', content3);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/update.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'updated') {
          swal(
            {
              title: 'Updated!',
              text: 'Post has been updated!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in updating, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });

  $('#Add_about_sixth').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content1 = $('.text1 .note-editable').html();
    let content2 = $('.text2 .note-editable').html();

    data.append('content1', content1);
    data.append('content2', content2);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/add_about.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'success') {
          swal(
            {
              title: 'Published!',
              text: 'Published!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in uploading, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });
  $('#Update_about_sixth_Section').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content1 = $('.text1 .note-editable').html();
    let content2 = $('.text2 .note-editable').html();

    data.append('content1', content1);
    data.append('content2', content2);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/update_about.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'updated') {
          swal(
            {
              title: 'Updated!',
              text: 'Post has been updated!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in updating, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });

  $('#Add_pricing').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/add_blog.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'success') {
          swal(
            {
              title: 'Published!',
              text: 'Published!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in uploading, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });
  $('#Update_pricing_Section').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/update.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'updated') {
          swal(
            {
              title: 'Updated!',
              text: 'Post has been updated!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in updating, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });

  $('.add_phone').click(function (e) {
    e.preventDefault();
    var val_n = $('#n_count').val();
    if (parseInt(val_n) > 2) {
      alert('Only 3 phone numbers are allowed!');
      exit;
    }
    val_n = parseInt(val_n) + 1;
    $(this)
      .parent()
      .find('.col-sm-10')
      .append(
        '<textarea class="form-control mt-3" id="phone' +
          val_n +
          '" name="phone' +
          val_n +
          '" cols="30" rows="5" placeholder="Enter Phone Number"></textarea>'
      );
    $('#n_count').val(val_n);
  });
  $('.add_phone2').click(function (e) {
    e.preventDefault();
    var val_n = $('#n_count').val();
    if (parseInt(val_n) > 9) {
      alert('Only 10 Points are allowed!');
      exit;
    }
    val_n = parseInt(val_n) + 1;
    $(this)
      .parent()
      .find('.col-sm-10')
      .append(
        '<textarea class="form-control mt-3" id="point' +
          val_n +
          '" name="point' +
          val_n +
          '" cols="30" rows="5" placeholder="Enter Point"></textarea>'
      );
    $('#n_count').val(val_n);
  });
  $('.add_phone3').click(function (e) {
    e.preventDefault();
    var val_n = $('#n_count').val();
    if (parseInt(val_n) > 3) {
      alert('Only 4 Points are allowed!');
      exit;
    }
    val_n = parseInt(val_n) + 1;
    $(this)
      .parent()
      .find('.col-sm-10')
      .append(
        '<textarea class="form-control mt-3" id="point' +
          val_n +
          '" name="point' +
          val_n +
          '" cols="30" rows="5" placeholder="Enter Point"></textarea>'
      );
    $('#n_count').val(val_n);
  });

  $('#Add_footer').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    var n_count = $('#n_count').val();
    var i = 0;
    var phones = [];
    while (i < parseInt(n_count)) {
      i++;
      phones.push($('#phone' + i).val());
    }
    data.append('phones', phones);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/add_footer.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'success') {
          swal(
            {
              title: 'Published!',
              text: 'Published!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in uploading, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });
  $('#Update_footer').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    var n_count = $('#n_count').val();
    var i = 0;
    var phones = [];
    while (i < parseInt(n_count)) {
      i++;
      phones.push($('#phone' + i).val());
    }
    data.append('phones', phones);
    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/footer.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'updated') {
          swal(
            {
              title: 'Updated!',
              text: 'Post has been updated!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in updating, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });

  $('#Add_about_fourth').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content = $('.note-editable').html();

    data.append('content', content);

    var n_count = $('#n_count').val();
    var i = 0;
    var points = [];
    while (i < parseInt(n_count)) {
      i++;
      points.push($('#point' + i).val());
    }
    data.append('points', points);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/add_about.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'success') {
          swal(
            {
              title: 'Published!',
              text: 'Published!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in uploading, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });
  $('#Update_about_fourth_Section').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);

    let content = $('.note-editable').html();

    data.append('content', content);

    var n_count = $('#n_count').val();
    var i = 0;
    var points = [];
    while (i < parseInt(n_count)) {
      i++;
      points.push($('#point' + i).val());
    }
    data.append('points', points);
    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/update_about.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'updated') {
          swal(
            {
              title: 'Updated!',
              text: 'Post has been updated!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in updating, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });

  $('#Add_about').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content = $('.note-editable').html();

    data.append('content', content);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/add_about.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'success') {
          swal(
            {
              title: 'Published!',
              text: 'Published!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in uploading, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });
  $('#Update_about').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content = $('.note-editable').html();

    data.append('content', content);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/update_about.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'updated') {
          swal(
            {
              title: 'Updated!',
              text: 'Post has been updated!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in updating, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });

  $('#Add_about_first').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content1 = $('.text1 .note-editable').html();
    let content2 = $('.text2 .note-editable').html();
    let content3 = $('.text3 .note-editable').html();

    data.append('content1', content1);
    data.append('content2', content2);
    data.append('content3', content3);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/add_about.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'success') {
          swal(
            {
              title: 'Published!',
              text: 'Published!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in uploading, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });
  $('#Update_about_first_Section').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content1 = $('.text1 .note-editable').html();
    let content2 = $('.text2 .note-editable').html();
    let content3 = $('.text3 .note-editable').html();

    data.append('content1', content1);
    data.append('content2', content2);
    data.append('content3', content3);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/update_about.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'updated') {
          swal(
            {
              title: 'Updated!',
              text: 'Post has been updated!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in updating, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });
  $('#Add_about_second').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content = $('.note-editable').html();

    data.append('content', content);

    var n_count = $('#n_count').val();
    var i = 0;
    var points = [];
    while (i < parseInt(n_count)) {
      i++;
      points.push($('#point' + i).val());
    }
    data.append('points', points);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/add_about.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'success') {
          swal(
            {
              title: 'Published!',
              text: 'Published!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in uploading, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });
  $('#Update_about_second_Section').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content = $('.note-editable').html();

    data.append('content', content);

    var n_count = $('#n_count').val();
    var i = 0;
    var points = [];
    while (i < parseInt(n_count)) {
      i++;
      points.push($('#point' + i).val());
    }
    data.append('points', points);
    console.log(points);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/update_about.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'updated') {
          swal(
            {
              title: 'Updated!',
              text: 'Post has been updated!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in updating, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });

  $('#Add_hospitality_section').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content = $('.note-editable').html();
    let content2 = $('.text2 .note-editable').html();

    data.append('content', content);
    data.append('content2', content2);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/add_about.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'success') {
          swal(
            {
              title: 'Published!',
              text: 'Published!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in uploading, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });
  $('#Update_hospitality_section').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content = $('.note-editable').html();
    let content2 = $('.text2 .note-editable').html();

    data.append('content', content);
    data.append('content2', content2);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/update_about.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'updated') {
          swal(
            {
              title: 'Updated!',
              text: 'Post has been updated!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in updating, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });
  $('#Add_third_hospitality_section').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content = $('.note-editable').html();
    let content2 = $('.text2 .note-editable').html();
    let content3 = $('.text3 .note-editable').html();

    data.append('content', content);
    data.append('content2', content2);
    data.append('content3', content3);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/add_about.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'success') {
          swal(
            {
              title: 'Published!',
              text: 'Published!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in uploading, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });
  $('#Update_third_hospitality_section').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content = $('.note-editable').html();
    let content2 = $('.text2 .note-editable').html();
    let content3 = $('.text3 .note-editable').html();

    data.append('content', content);
    data.append('content2', content2);
    data.append('content3', content3);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/update_about.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'updated') {
          swal(
            {
              title: 'Updated!',
              text: 'Post has been updated!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in updating, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });

  $('#Add_iptv_section').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content = $('.note-editable').html();
    let content2 = $('.text2 .note-editable').html();
    let content3 = $('.text3 .note-editable').html();

    data.append('content', content);
    data.append('content2', content2);
    data.append('content3', content3);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/add_about.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'success') {
          swal(
            {
              title: 'Published!',
              text: 'Published!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in uploading, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });
  $('#Update_iptv_section').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content = $('.note-editable').html();
    let content2 = $('.text2 .note-editable').html();
    let content3 = $('.text3 .note-editable').html();

    data.append('content', content);
    data.append('content2', content2);
    data.append('content3', content3);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/update_about.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'updated') {
          swal(
            {
              title: 'Updated!',
              text: 'Post has been updated!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in updating, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                history.back();
              }
            }
          );
        }
      },
    });
  });
});
