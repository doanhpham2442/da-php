    function deleteBanner(id) {
        var option = confirm('Bạn có muốn xoá tiêu đề này không');
        if(!option) {
            return;
        }
        $.post('api/delete_banner.php', {
            'id': id
        }, function(data) {
            alert(data);
            // location.reload()
        })
    }
    function deleteProduct(id) {
        var option = confirm('Bạn có muốn xoá sản phẩm này không');
        if(!option) {
            return;
        }
        $.post('api/delete_product.php', {
            'id': id
        }, function(data) {
            alert(data);
            // location.reload()
        })
    }

    function deleteAccount(id) {
        var option = confirm('Bạn có muốn xoá tài khoản này không');
        if(!option) {
            return;
        }
        $.post('api/delete_account.php', {
            'id': id
        }, function(data) {
            alert(data);
            // location.reload()
        })
    }

    function deleteArticle(id) {
        var option = confirm('Bạn có muốn xoá bài viết này không');
        if(!option) {
            return;
        }
        $.post('api/delete_article.php', {
            'id': id
        }, function(data) {
            alert(data);
            // location.reload()
        })
    }

    function deleteCustomer(id) {
        var option = confirm('Bạn có muốn xoá khách hàng này không');
        if(!option) {
            return;
        }
        $.post('api/delete_customer.php', {
            'id': id
        }, function(data) {
            alert(data);
            // location.reload()
        })
    }

