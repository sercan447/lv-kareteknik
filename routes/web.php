<?php


Route::get('/', function () {
    return view('frontend.index');
});



//PANEL ILE ILGILI ROUTE Girisleri
Route::group(["prefix"=>"yonetici"],function(){

  Route::get("admanasayfa",function(){
    $tarih = date("d-m-Y");
    $gun = date("d");
    return view("backend.anasayfa")->withSayfa("Anasayfa")->withTarih($tarih)->withGun($gun);
  })->name("admanasayfa");


  /////////////////////////////////////////////////////////////////////

  Route::get("admfirmabilgi","HakkimizdaController@hakkimizda_show")->name("admfirmabilgi");
  Route::post("admfirmabilgi","HakkimizdaController@hakkimizda_create")->name("admfirmabilgi");
  ///////////////////////////////////////////////////////////////////////////
  Route::get("admsosyalmedya","SosyalmedyaController@sosyalmedya_show")->name("admsosyalmedya");
  Route::post("admsosyalmedya","SosyalmedyaController@sosyalmedya_create");
  /////////////////////////////////////////////////////////

  Route::get("admkategoriekle",function(){
    return view("backend.urunkategoriekle")->with("sayfa","Kategori Ekle");
  })->name("admkategoriekle");

  
  ///////////////////////////////////////////////////////
  Route::get("admurunekle",function(){
    return view("backend.urunekle")->with("sayfa","Ürün Ekle");
  })->name("admurunekle");

  Route::post("admurunekle","UrunlerController@urunler_create")->name("admurunekle");

  /////////////////////////////////
  Route::get("admmusteriler","MusterilerController@musteriler_show")->name("admmusteriler");

  //////////////////////////////////////////

  Route::get("admgaleri",function(){
    return view("backend.admgaleri")->with("sayfa","Galeri");
  })->name("admgaleri");

  Route::post("admgaleri","galeriController@galeri_create")->name("admgaleri");
  //Route::post("admgaleri","GaleriController@sercanus");

  /////////////////////////////////////////////////////////
  Route::get("admiletisimalani","iletisimController@iletisim_show")->name("admiletisimalani");
  Route::post("admiletisimalani","iletisimController@iletisim_create")->name("admiletisimalani");
  ////////////////////////////////////////////////////////////
  Route::get("admurunler","UrunlerController@urunler_show")->name("admurunler");
  Route::post("admurunler","UrunlerController@urunler_delete")->name("admurunler");

  Route::get("admurunduzenle","UrunlerController@urunler_edit")->name("admurunduzenle");
  Route::post("admurunduzenle","UrunlerController@urunler_edit_post")->name("admurunduzenle");

////////////////////////////////////

  Route::get("admhaberler","HaberlerController@backend_haberler_show")->name("admhaberler");
  Route::get("admhaberekle","HaberlerController@admhaber_sayfasi")->name("admhaberekle");
  Route::post("admhaberekle","HaberlerController@haberler_create")->name("admhaberekle");
  ////////////////////////////////////
Route::get("admhaberduzenle","HaberlerController@admhaber_duzenle_sayfa")->name("admhaberduzenle");
  Route::post("admhaberduzenle","HaberlerController@admhaber_edit_post")->name("admhaberduzenle");

Route::get("admkullanicilar","KullaniciController@kullanicilar_show")->name("admkullanicilar");
Route::post( "admkullanicilar", "KullaniciController@kullanicilar_AktifPasif")->name("admkullanicilar");

Route::get("admetkinlikolustur",function(){
  return view("backend.etkinlikolustur")->with("sayfa","Yeni Etkinlik Ekle");
})->name("admetkinlikolustur");



});// Route::grup

/*
Route::get("admsistemcikis",function(){
  return view("backend.sistemcikis");
})->name("admsistemcikis");

*/

////////////////////////////////////////

Route::get('/home', 'HomeController@index')->name('home');

