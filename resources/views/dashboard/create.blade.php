<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ajouter un vehicule
        </h2>
    </x-slot>

    <style>
      .errormsg {
         color:red;
      }
      </style>

<div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center h-100">

    <div class="col col-sm-6 col-md-12 col-lg-4 col-xl-3">

     <!-- Alert message (start) -->
     @if(Session::has('message'))
     <div class="alert {{ Session::get('alert-class') }}">
        {{ Session::get('message') }}
     </div>
     @endif 
     <!-- Alert message (end) -->

     <div class="actionbutton">

     </div>

     <form action="{{route('cars.store')}}" method="post" >
        {{csrf_field()}}

        <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Modèle <span class="required">*</span></label>
         <div class="col-md-12 col-sm-12 col-xs-12">
            <input id="model" class="form-control col-md-12 col-xs-12" name="model" placeholder="Exemple : RS6" required="required" type="text">

            @if ($errors->has('model'))
               <span class="errormsg">{{ $errors->first('model') }}</span>
            @endif
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Marque
</label>
         <div class="col-md-12 col-sm-12 col-xs-12">
            <input name='brand' id='brand' class='form-control' placeholder="Exemple : Audi" type="text">

            @if ($errors->has('brand'))
               <span class="errormsg">{{ $errors->first('brand') }}</span>
            @endif
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="power">Puissance
</label>
         <div class="col-md-12 col-sm-12 col-xs-12">
            <input name='power' id='power' class='form-control' placeholder="Exemple : 600 CH" type="text">

            @if ($errors->has('power'))
               <span class="errormsg">{{ $errors->first('power') }}</span>
            @endif
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="year">Année
</label>
         <div class="col-md-12 col-sm-12 col-xs-12">
            <input name='year' id='year' class='form-control' placeholder="Exemple : 2022" type="text">

            @if ($errors->has('year'))
               <span class="errormsg">{{ $errors->first('year') }}</span>
            @endif
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="finishing">Finition
</label>
         <div class="col-md-12 col-sm-12 col-xs-12">
            <input name='finishing' id='finishing' class='form-control' placeholder="Exemple : S Line" type="text" >

            @if ($errors->has('finishing'))
               <span class="errormsg">{{ $errors->first('finishing') }}</span>
            @endif
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="short_description">Description
</label>
         <div class="col-md-12 col-sm-12 col-xs-12">
            <textarea name='short_description' id='short_description' class='form-control'></textarea>

            @if ($errors->has('short_description'))
               <span class="errormsg">{{ $errors->first('short_description') }}</span>
            @endif
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="main_photo">Photo Principale
</label>
         <div class="col-md-12 col-sm-12 col-xs-12">
            <input name='main_photo' id='main_photo' class='form-control' placeholder="URL" type="text" >

            @if ($errors->has('main_photo'))
               <span class="errormsg">{{ $errors->first('main_photo') }}</span>
            @endif
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sale_price">Prix De Vente
</label>
         <div class="col-md-12 col-sm-12 col-xs-12">
            <input name='sale_price' id='sale_price' class='form-control' type="text">

            @if ($errors->has('sale_price'))
               <span class="errormsg">{{ $errors->first('sale_price') }}</span>
            @endif
         </div>
       </div>

        <div class="form-group">
           <div class="col-md-12">

              <input type="submit" name="submit" value='Valider' class='btn btn-info btn-lg btn-block'>
           </div>
        </div>

     </form>

   </div>
</div>
</div>

</x-app-layout>