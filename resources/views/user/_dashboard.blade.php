@extends('layouts.user')

@section('content')
  
<section class="container">
  <div class="row justify-content-center">
      <div class="col-md-4" style="min-height: 650px;">
        <div class="card-header imath-header-color">
          <div class="row text-start">
            <div class="col-4">
              <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="50" height="50" fill="url(#pattern0)"/>
                <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_44_63" transform="scale(0.00662252)"/>
                </pattern>
                <image id="image0_44_63" width="151" height="151" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJcAAACXCAYAAAAYn8l5AAAACXBIWXMAAAsSAAALEgHS3X78AAAFB0lEQVR42u3dS28bVRyG8XdmPL4kzkVKuyBc4kUQyqaxUFVRCamJxB7zCWrYsQtbVuUbpJ+AZFWpG5JN1+5lV4RcCdGAosYJIqIhoU6jlNSEDpsTCMGXcXxOwJnnJ1ks6pL6P4/OGR+7qhdFkXowYx4F88D5UJFUO/bfU/FOEVfJPK5zDRJhXdK8pKVuQ+smrpL5IRPMO7EWJc1Jqsd5sh/jOQWzPH5FWIl33axeczZWrpKkBUkjzBUnLEsqt1vF2sVVlvQlM0Qbj8wbuno32yJhIY5pc8s0GnflKpn7K6CbFazYaeUqmHssoNsVbL7TylWRdI1Z4ZRmTUP/WrnKhIUeLbTaFm8wG/RowixS/4irLA5IYceNk3GVmAksrl7Fo7hGJX3ITGBR+SiuGWYBy2aO4ioyC1g2zcoFp6uXzwzgCnGBuEBcAHGBuEBcAHGBuEBcQBupJLzIVz//oOiX9bP5Yb/92PEpwZVPiOu8OLx3WwdLt+wv+2OB/NfTCi6mFYyE8sK4GwFxoUVQqbdzSo1nu4iJbRHttrLJtMLJAQUjaYZBXJZWqtdSylwelj/AqIjLloyn9JW8wvEcsyAui1vgW2llLg9zT0VclgdyKafM1BCDIC670u/lFU4MMAhb96uMgLCIi7CIi7BAXDIHo4RFXNZf+FigzKVhCiAu+8JinnMs4rIvNZVV6kKGq09clmU8pafyXHnicrBqvcNXZYjL1ao1OchVJy77gjdDVi3icvQOcZIzLeJywBvy+RYpcTnaEt8gLOJy9UIvhFxt4nIjdZFDU+Jycb/lN3iXSFyuHHClicvVq9zlShMXiAsgLvyn79AT8SLfLevV1mOuNnHZ5xWuKihc5WqzLYK4AOICcYEb+n60szgn/XTvf/PnGfv8G+I6L6L6pvIj2ywlbIsgLoC4QFwgLoC4QFwgLoC4QFwgLoC4QFwgLoC4QFwgLoC4QFwgLoC4QFwAcYG4QFyI4/lmjrjgxu8Nn7jgxv52QFxwY2+DlQuu4lr1iAvczBNXH9l5kiYuuPFsxScuuNkSG7+KuGDf05Xk/XuPxHUGXu6F2vnaIy7Yt/FwMJGvm7hYtYirX63dH0zsaycux+8Q6996xAW7DhuBVu9kEz0D4nK1HT4YSty5FnGdga3v84m9iScuh/Z3MnqyHDII4rIf1ne3BhgEcbkJ648XzIK4CIu4CKt/pRhBb+8KuXknLqsOG4HWHgxx3EBcdj3fzGn1TjbxB6TEZdHLvVBr9wcT/VkhcTmIauPhIFsgcdnd/p6uZIiKuOwdK2w9zurZis89FXH1FtLBXkr724H2Nny92PQ4qyKu7uU/+FSNjfd1mB1XFPz9t56z5jFGB054URRVJF1jFLBslo9/4AxxgbhAXABxgbhAXABxgbhwXuKqMwY4UPMlVZkDXMVVYQ6w7O7RtliRtMs8YNHS8Rv6JeYBV3HNMw9Ysiypdjyu6tE+CfTor4Xq+DnXHHOBhVWr0iyuqqSbzAentHtygfKiKDr5pKqkaWaFLn108o1hs49/SuJoAt25qSYnDs3iqkmaITDEtNjqfr3VB9dVE9g6s0OHFavc6hfbfSuiKqkojijQ/Ob9404nDJ2+clM3K9hnbJMw7ppFZ6HTE+N+n2teUkHSF0SW6KhmzWJTi/Mbmh1FxFE2P6QkaYS5n1uPzLvAhbhB2YjruIJ5FCWNcj36XtXcDlV6/R/9CZheFEY716CfAAAAAElFTkSuQmCC"/>
                </defs>
              </svg>                
            </div>
            <div class="col-4 text-center">
              <label class="text-white">Halo,</label>
              <label class="text-white">
                {{$user->name}}
              </label>
              <small class="text-white">NIM:123456</small>
            </div>
            <div class="col-4 text-end">
              <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M29 0C12.992 0 0 12.992 0 29C0 45.008 12.992 58 29 58C45.008 58 58 45.008 58 29C58 12.992 45.008 0 29 0ZM29 8.7C33.814 8.7 37.7 12.586 37.7 17.4C37.7 22.214 33.814 26.1 29 26.1C24.186 26.1 20.3 22.214 20.3 17.4C20.3 12.586 24.186 8.7 29 8.7ZM29 49.88C25.5544 49.88 22.1623 49.0273 19.1263 47.398C16.0903 45.7687 13.5047 43.4133 11.6 40.542C11.687 34.771 23.2 31.61 29 31.61C34.771 31.61 46.313 34.771 46.4 40.542C44.4953 43.4133 41.9097 45.7687 38.8737 47.398C35.8377 49.0273 32.4456 49.88 29 49.88Z" fill="white"/>
                </svg>                
            </div>
          </div>
        </div>
        <div class="card-body imath-body-color" style="min-height: 660px;">
          @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          <div class="row">
            <div class="col-md-12">
  
              @foreach ($materis as $materi)
                @if(\Carbon\Carbon::now()->format('Y-m-d') < $materi->tgl_aktif)
                    <div class="card imath-btn-color w-100 my-2">
                      <div class="card-body">
                        <div class="row text-white">
                          <div class="col-2 text-start h-100">
                            {{$loop->iteration}} |
                          </div>
                          <div class="col-8 text-start text-nowrap h-100">
                            {{$materi->judul}}
                          </div>
                          <div class="col-2 text-end">
                            <i class="fa fa-lock"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                @else
                <a href="{{ route('materi-ongoing.show',$materi->id)}}" style="text-decoration: none;">
                    <div class="card imath-btn-color w-100 my-2">
                      <div class="card-body">
                        <div class="row text-white">
                          <div class="col-2 text-start h-100">
                            {{$loop->iteration}} |
                          </div>
                          <div class="col-8 text-start text-nowrap h-100">
                            {{$materi->judul}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                @endif
                
              @endforeach
            </div>
          </div>
        </div>
      </div>
  </div>
</section>


@endsection