@extends('layout.app')

@section('content')
<div id="content">
        <div class="container">
      <section class="bar">
            <div class="row">
              <div class="col-md-12">
                <div class="heading">
                  <h3>Biodata Calon Peserta</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-10">
                <form action="/daftar/create" method="post">
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
                    <input type="checkbox" id="pernyataan" name="pernyataan" required> Dengan ini saya mematuhi dan menyetujui segala syarat dan aturan yang berlaku di NEXTBIT
                </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-outline-dark"><i class="fa fa-user-md"></i> Register</button>
                    {{ csrf_field() }}
                  </div>
                </form>
            </div>
          </section>
        </div>
      </div>
          @endsection