@extends('layout.app', ["current" => "produtos"])

@section('body')

    <div class="card-border">
        <div class="card-body">
            <form action="/produtos" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto"> Nome do Produto </label>
                    <input type="text" class="form-control" name="nomeProduto" 
                        id="nomeProduto" placeholder="Produto">

                    <label class="my-1 mr-2" for="selectcategoria">Categoria</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="selectCategoria">
                        <option selected>Choose...</option>
                        @foreach ($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->nome}}</option>
                        @endforeach
                    </select>    
                </div> 

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
            </form>           
        </div>
    </div>
@endsection



       
