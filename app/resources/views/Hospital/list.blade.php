<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="logo.jpg" type="image/x -icon" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css" />
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </head>
  <body>
    <div class="main">
      <div class="header">
        <span id="logo"><img src="logo.png" alt="" /></span>
        <span class="contact"
          >Care Center
          <p id="phone"><a href="tel:123-456-7890"><ion-icon name="call"></ion-icon></a></p></span>
      </div>
      <div class="mainbody">
        <div class="nav">
          <div class="systemname">Sakura Hospital</div>
          <ul class="menu">
            <li class="active"><ion-icon name="apps"></ion-icon> Dashboard</li>
          <a href=""><li><ion-icon name="git-network"></ion-icon> Doctor List</li></a>
          </ul>
          <hr>
          <ul class="menu">
           
          </ul>
        </div>
        <div class="body">
          <p class="dashboard">Hospital Status</p>
          <div class="h_status">
            <div class="doctor">
              <ion-icon name="git-network"></ion-icon>
              <p class="name">Doctor</p>
              <p class="count" id="dcount"></p>
            </div>
            <div class="nurse">
              <ion-icon name="people-outline"></ion-icon>
              <p class="name">Nurse</p>
              <p class="count" id="ncount"></p>
            </div>
            <div class="room">
              <ion-icon name="bed-outline"></ion-icon>
              <p class="name">Bed</p>
              <p class="count" id="bcount"></p>
            </div>
          </div>
          <div class="detailstatus">
            <div class="status">
              <div class="title colorprimary bgsecondary">
                <ion-icon name="bed-outline"></ion-icon><span id="roomTitle"> </span>
              </div>
              <table class="table" id="room">
                @forelse( $users as $user)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address }}</td>
                    <td class="colspan=2 price"><a href="{{ route("test.edit",$user->id) }}" class="text-primary edit">edit</a></td>
                    <td class="price"> <form action="{{ route('test.destroy',$user->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="p-0 text-danger delete">delete</button>
                    </form> </td>
                  </tr>  
                @empty
                    <h2 class="text-danger"></h2>
                @endforelse
              </table>
              <a href="test/create"><button class="btn btnroom">Add New</button></a>
            </div>
            <hr class="mb-3">
            <div class="status">
              <div class="title bgthird">
                <ion-icon name="mail-unread-outline"></ion-icon><span id="messageTitle"> </span>
              </div>
              <table class="table" id="message">
                @forelse( $drugs as $list)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $list->item }}</td>
                    <td>{{ $list->stock }}</td>
                    <td class="notic">{{$list->notic}}</td>
                    <td class="colspan=2 price"><a href="{{ route('addnew.edit',$list->id) }}" class="text-primary edit">edit</a></td>
                    <td class="price"> <form action="{{ route('addnew.destroy',$list->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="p-0 text-danger delete">delete</button>
                    </form> </td>
                  </tr>  
                @empty
                    <h2 class="text-danger">There is no drugs in the stock</h2>
                @endforelse
              </table>
              <a href="/addnew/create"><button class="btn btnroom">Add New</button></a>  
            </div>
          </div>
          <hr class="mb-3">
          <div class="detailstatus">
            <div class="status">
              <div class="title colorprimary bgfouth">
              <ion-icon name="medkit"></ion-icon><span id="drugTitle">  Drug Store</span>
              </div>
              <table class="table">
                @forelse ($shops as $shop)
                <tr>
                  <td>{{ $loop->iteration}}</td>
                  <td>{{ $shop->brand }}</td>
                  <td>{{ $shop->product }}</td>
                  <td>{{ $shop->payment }}</td>
                  <td>{{ $shop->address }}</td>
                  <td class="colspan=2 price"><a href="{{ route('shop.edit',$shop->id) }}" class="text-primary edit">edit</a></td>
                  <td class="price"> <form action="{{ route('shop.destroy',$shop->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="p-0 text-danger delete">delete</button>
                  </form> </td>
                </tr>  
                @empty
                    <h2 class="shop text-warning">There is no shop</h2>
                @endforelse
              </table>
              <a href="shop/create"><button class="btn btnroom">Add New</button></a>  
            </div>
            <div class="status">
              <div class="title colorprimary btnappointment">
              <ion-icon name="calendar"></ion-icon><span id="appointmentTitle"> Appointment </span>
              </div>
              <table class="table">
               @forelse ($brands as $brand)
               <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $brand->brand }}</td>
                <td>{{ $brand->product }}</td>
                <td>{{ $brand->payment }}</td>
                <td class="colspan=2 price"><a href="{{ route('brand.edit',$brand->id) }}" class="text-primary edit">edit</a></td>
                <td class="price"> <form action="{{ route('brand.destroy',$brand->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="p-0 text-danger delete">delete</button>
                </form></td>
              </tr>  
               @empty
                   <h2 class="text-danger">There is no brand in this list</h2>
               @endforelse
              </table>
              <a href="brand/create"><button class="btn btnroom">Add New</button></a>  
            </div>
        </div>
      </div>
    </div>
  </body>
</html>
