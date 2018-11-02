@extends('layout.app')
@section('header')
    <style>
        .image-preview-input {
            position: relative;
            overflow: hidden;
            margin: 0px;
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }
        .image-preview-input input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .image-preview-input-title {
            margin-left:2px;
        }
    </style>
@endsection
@section('content')
<div id="content">
        <div class="container">
      <section class="bar">
            <div class="row">
              <div class="col-md-12">
                <div class="heading">
                  <h3>Biodata Calon Trainee/Volunteer Trainer</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-10">
                {!! Form::open(['route' => 'DaftarCreate', 'method' => 'post', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        <label for="name-login">Nama Lengkap</label>
                        <input id="nama" type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="text" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No HP</label>
                        <input type="text" id="no_hp" name="no_hp" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="kursus">Kursus yang dinginkan</label>
                        <select  id="kursus" name="kursus" class="form-control">
                          <option value="1">Basic of Python</option>
                          <option value="2">Basic of PHP</option>
                          <option value="3">Basic of Javascript</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kursus">Kursus yang dinginkan</label>
                        <select  id="kursus" name="role" class="form-control">
                            <option value="1">Peserta</option>
                            <option value="2">Volunteer Training</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="input-group image-preview">
                            <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                            <span class="input-group-btn">
                                <!--image-preview-clear button-->
                                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                    <span class="glyphicon glyphicon-remove"></span> Clear
                                </button>
                                <!-- image-preview-input -->
                                <div class="btn btn-default image-preview-input">
                                    <span class="glyphicon glyphicon-folder-open"></span>
                                    <span class="image-preview-input-title">Browse</span>
                                    <input type="file" accept="image/png, image/jpeg, image/gif" name="kartu"/>
                                </div>
                            </span>
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" id="pernyataan" name="pernyataan" required> Dengan ini saya mematuhi dan menyetujui segala syarat dan aturan yang berlaku di NEXTBIT</label>
                    </div>
                    <div class="text-center">
                        <button id="reg_btn" type="submit" class="btn btn-outline-dark"><i class="fa fa-user-md"></i> Register</button>
                        {{ csrf_field() }}
                    </div>
                {!! Form::close() !!}
            </div>
          </section>
        </div>
      </div>
@endsection
@section('jscript')
    <script>
        $(document).on('click', '#close-preview', function(){
            $('.image-preview').popover('hide');
            // Hover befor close the preview
            $('.image-preview').hover(
                function () {
                    $('.image-preview').popover('show');
                },
                function () {
                    $('.image-preview').popover('hide');
                }
            );
        });

        $(function() {
            // Create the close button
            var closebtn = $('<button/>', {
                type:"button",
                text: 'x',
                id: 'close-preview',
                style: 'font-size: initial;',
            });
            closebtn.attr("class","close pull-right");
            // Set the popover default content
            $('.image-preview').popover({
                trigger:'manual',
                html:true,
                title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
                content: "There's no image",
                placement:'bottom'
            });
            // Clear event
            $('.image-preview-clear').click(function(){
                $('.image-preview').attr("data-content","").popover('hide');
                $('.image-preview-filename').val("");
                $('.image-preview-clear').hide();
                $('.image-preview-input input:file').val("");
                $(".image-preview-input-title").text("Browse");
            });
            // Create the preview image
            $(".image-preview-input input:file").change(function (){
                var img = $('<img/>', {
                    id: 'dynamic',
                    width:250,
                    height:200
                });
                var file = this.files[0];
                var reader = new FileReader();
                // Set preview image into the popover data-content
                reader.onload = function (e) {
                    $(".image-preview-input-title").text("Change");
                    $(".image-preview-clear").show();
                    $(".image-preview-filename").val(file.name);
                    img.attr('src', e.target.result);
                    $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
                }
                reader.readAsDataURL(file);
            });
        });
    </script>
@endsection