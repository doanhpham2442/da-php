function AddToCart(id) {
    var num = document.getElementById("quantity").value;
    if(num > 100 || num < 1)
    {
        alert("Số lượng sản p ko hợp lệ");
        return ;
    }else
    {
        $.post("addtocart.php", {
                'id': id,
                'num': num,
                'action': 'add'
            }, function (data) {
                alert("Thêm thành công");
                console.log(data);
                $("#tong").innerHTML = 2 ;
                $("#totalqty").innerHTML = 1;
            }
        );
    }

}
function UpdateCart() {
   var cart = [];
    var as ;
    const cookies = document.cookie.split(';');
    for (let i = 0; i < cookies.length; i++) {
        let c = cookies[i].trim().split('=');
        // console.log(c);
        // console.log(c[0]);
        if(c[0] == 'cart')
        {
            cart = c[1] ;
            cart =  decodeURIComponent(cart);
            console.log(cart);
            as = JSON.parse(cart);

        }
    }
    console.log(as);
    var num,id;
    for (let i = 0; i < as.length; i++) {
        console.log(as[i]['id']);
         id ="quantity"+as[i]['id'];
          num = document.getElementById(id).value;
        if(num > 100 || num < 1)
        {
            alert("Số lượng sản p ko hợp lệ");
            return ;
        }else
        {
            as[i]['num'] = num;

        }
    }
    var cartUpdate = JSON.stringify(as);

        $.post("addtocart.php", {
                'cartUpdate': cartUpdate,
                'action': 'update'
            }, function (data) {
                alert("Cập nhật  thành công");
                console.log(data);
                location.reload();
            }
        );


}


function DeleteFromCart(id) {

    // $('#removeFromCart').on('click', function(e) {
    //     e.stopImmediatePropagation(); // Now nothing will happen
    // });
    var option = confirm("Bạn có muốn xóa sẩn phẩm khỏi giỏ hàng không");
    if(option == false)
    {
        return;
    }
    $.post("addtocart.php", {
            'id': id,
            'action': 'delete'
        }, function (data) {
            console.log(data);
            location.reload();

        }
    );


}


