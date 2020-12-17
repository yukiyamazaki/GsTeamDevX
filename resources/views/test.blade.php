<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>こちらテストページ</title>
</head>
<body>
  <div>
    <h1>こちらテストページ</h1>
  </div>

  <div>
    {{-- ここから資料投稿のテストFORM部分 --}}
    <h2>test1 資料投稿FORM</h2>
    <form method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
        <h3 >
          <span>資料情報</span>
        </h3>
        <div>
          <p></p>
          <p></p>
          <table>
            <tbody>
              <tr>
                <th>タイトル</th>
                <th>
                  <div>
                    <input type="text" name="title">
                  </div>
                </th>
              </tr>

              <tr>
                <th>
                  説明
                </th>
                <th>
                  <div>
                    <inputn name="discription"></inputn>
                  </div>
                </th>
              </tr>
              <tr>
                <th>
                  学年カテゴリ
                </th>
                <th>
                  <div>
                    <input type="text"name="school_category" value=""> 
                  </div>
                </th>
              </tr>
              <tr>
                <th>
                  教科
                </th>
                <th >
                  <div>
                    <input type="text" name="subject" value=""> 
                  </div>
                </th>
              </tr>
              <tr>
                <th>
                  年次
                </th>
                <th>
                  <div>
                    <input type="text" name="grade" id="grade" ></input>
                  </div>
                </th>
              </tr>
              <tr>
                <th>
                投稿資料
                </th>
                <th >
                  <div>
                    <input type="file" name="file1" id="file">
                  </div>
                </th>
              </tr>
              </tbody>
            </table>
        </div>


          
        <!-- submit button -->
        <div>
          <div >
            <a href="" id="rgs_btn">
              <span>登録に進む</span>
            </a>
          </div> 
          <p>
            <a href="">閉店申請はこちら</a>
          </p>
        </div>   

      
      </form>
  </div>
  
</body>
</html>