{{-- @extends('backend.layouts.main')
{{-- @extends('layout') --}}
{{-- @section('content')
<div class="content-body">
    <div class="container">

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">    
                        <h1> Welcome To Student Management</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, asperiores necessitatibus. Nesciunt, adipisci sapiente et itaque hic nemo nam quam minima ipsa eligendi qui, ratione voluptatum tempora! Corporis nihil quia dolores soluta, accusantium ullam sed non mollitia facilis harum vitae blanditiis exercitationem nulla ducimus porro ea sapiente autem debitis ex dolorum dolorem suscipit. Reiciendis fuga illo possimus. Atque quasi aliquid cupiditate nulla quibusdam ab culpa repellat autem blanditiis, officiis ea adipisci nihil, expedita deleniti. Minima odit, nostrum porro quo tempora, quasi ullam non mollitia assumenda cum fugit dolorem id necessitatibus ut perspiciatis quaerat iure molestias consectetur omnis vero beatae atque itaque fugiat! Et, praesentium doloribus ex odit aliquid laboriosam molestias nulla recusandae sint deserunt ipsa quia optio mollitia porro architecto, officia deleniti veniam incidunt! Explicabo odit voluptas pariatur culpa maxime nobis. Dolores accusamus error quos ipsa nemo maxime dolore qui pariatur incidunt minima assumenda nostrum libero sed deleniti atque natus nesciunt praesentium sapiente saepe harum, et labore dignissimos. Numquam, odio earum commodi inventore provident aperiam possimus corporis sapiente non, ab, ducimus ex voluptate voluptatum accusamus recusandae dolore magnam nobis aliquam aut sit omnis eum itaque blanditiis ipsam? Ipsum tenetur molestiae voluptates possimus maiores officia nulla consequuntur esse vitae, cupiditate doloribus placeat. Tempora eum itaque fuga? Veniam et assumenda cum aspernatur reprehenderit numquam est dolorem recusandae accusantium eaque, totam beatae nostrum molestiae, corporis minima dignissimos adipisci. Architecto quia inventore sint, assumenda consequatur reprehenderit eum eveniet voluptates quam quo nobis, provident distinctio atque, molestias iste animi! Quibusdam rem aspernatur expedita nisi reprehenderit modi inventore sint repellendus natus quisquam totam, nesciunt sequi eaque debitis soluta repudiandae assumenda asperiores earum possimus nam iure maxime! Sed dicta sint corrupti sapiente? Aliquam, ipsum modi? Dolorum maiores tenetur aliquid fugiat facilis nihil quos sint neque voluptatem. Quis sit rem maiores deserunt eius ratione odio et eos distinctio!
                        </p>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</div>
</div>
</div> --}}
{{-- @endsection --}} --


@extends('backend.layouts.admin')

@section('content-header', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner">
                  <h3>{{$products_count}}</h3>
                <p>Total Produk</p>
              </div>
              <div class="icon">
              <i class="fas fa-dolly-flatbed"></i>
              </div>
              <a href="{{route('products.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                  <h3>{{$orders_count}}</h3>
                <p>Jumlah Pesanan</p>
              </div>
              <div class="icon">
              <i class="fas fa-chart-line"></i>
              </div>
              <a href="{{route('orders.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                  <h3>{{config('settings.currency_symbol')}} {{number_format($income, 0)}}</h3>
                <p>Total Pemasukan</p>
              </div>
              <div class="icon">
              <i class="fas fa-dollar-sign"></i>
              </div>
              <a href="{{route('orders.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
    </div>

    <div class="row">
    <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-teal">
              <div class="inner">
                <h3>{{config('settings.currency_symbol')}} {{number_format($income_today, 0)}}</h3>
                <p>Pemasukan Hari Ini</p>
              </div>
              <div class="icon">
                <i class="fas fa-money-check-alt"></i>
              </div>
              <a href="{{route('orders.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$customers_count}}</h3>

            <p>Total Kostumer</p>
          </div>
          <div class="icon">
          <i class="fas fa-users"></i>
          </div>
          <a href="{{ route('customers.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
</div>
@endsection
