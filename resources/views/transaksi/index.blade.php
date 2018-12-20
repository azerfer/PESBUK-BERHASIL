@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
        <div class="card-header">TRANSAKSI TIKET</div>
                    <div class="card-body">
                    <h3>Form Transaksi</h3>
                    <table class="table table-bordered">
                          <tr><td>
                                <div class="col-md-12">
                                    <input list="tiket" name="nama_tiket" placeholder="masukan nama tiket" class="form-control">
                                </div>
                           </td></tr>
                        <tr><td>
                                <div class="col-md-12">
                                <input type="text" name="qty" placeholder="QTY" class="form-control">
                                </div>
                         </td></tr>
                        <tr><td>
                                <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                                <button type="submit" name="submit" class="btn btn-danger">Selesai</button>
                            </td></tr>
                    </table>
                    </form>
                    <table class="table table-bordered">
                        <tr class="success"><th colspan="6">Detail Transaksi</th></tr>
                        <tr>
                            <th>No</th><th>Nama Tiket</th><th>Qty</th><th>Harga Tiket</th> <th>Subtotal</th><th>Cancel</th></tr>
                              <tr>
                                <td>1</td>
                                <td>nama_tiket</td>
                                <td>qty</td>
                                <td>harga</td>
                                <td>total</td>
                                <td><button type@extends('layouts.app')
                                    @section('content')
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="card">
                                            <div class="card-header">TRANSAKSI TIKET</div>
                                                        <div class="card-body">
                                                            
                                                        <h3>Form Transaksi</h3>
                                                        <table class="table table-bordered">
                                                            @include('validasi')
                                                            {!! Form::open(['route'=>'transaksi.store','method'=>'POST'])!!}
                                                              <tr><td>
                                                                    <div class="col-md-12">
                                                                        {!! Form::select('id_tiket',\App\Tiket::pluck('name_tiket','id'),NULL,['class'=>'form-control']) !!}
                                                                    </div>
                                                               </td></tr>
                                                            <tr><td>
                                                                    <div class="col-md-12">
                                                                        {{form::number('qty',null, ['class'=>'form-control'])}}
                                                                    </div>
                                                             </td></tr>
                                                              <tr><td>
                                                                    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                                                                    <a href="{{route('transaksi.update')}}" class="btn btn-danger">Selesai</a>
                                                                </td></tr>
                                                        </table>
                                                        {!! Form::close() !!}
                                                        <table class="table table-bordered">
                                                            <tr class="success"><th colspan="6">Detail Transaksi</th></tr>
                                                            <tr>
                                                             <th>No</th><th>Nama Tiket</th><th>Qty</th><th>Harga Tiket</th> <th>Subtotal</th><th>Cancel</th></tr>
                                                            <?php $no=1; $total=0; ?>
                                                             @foreach ($transaksi as $item)
                                                            <tr>
                                                                    <td>{{$no}}</td>
                                                                    <td>{{ $item->tiket->name_tiket }}</td>
                                                                    <td>{{ $item->qty }}</td>
                                                                    <td>{{ $item->tiket->harga_tiket }}</td>
                                                                    <td>{{ $item->tiket->harga_tiket*$item->qty }}</td>
                                                                    {!! Form::open(['route'=>['transaksi.destroy',$item->id],'method'=>'DELETE'])!!}
                                                                    <td><button type="submit" class="btn btn-danger">Cancel</button></td>
                                                                    {!! Form::close() !!}
                                                            </tr>
                                                                <?php $no++ ?>
                                                                <?php $total=$total+($item->tiket->harga_tiket*$item->qty) ?>
                                                                @endforeach
                                                                    <tr><td colspan="5"><p align="right">Total</p></td><td>{{$total}}</td></tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    @endsection="submit" class="btn btn-danger">Cancel</button></td></tr>
                                <tr><td colspan="5"><p align="right">Total</p></td><td>total</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection