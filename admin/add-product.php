<?php require_once '../inc/config.php' ?>
<?php
if (!is_admin_login()) {
    redirect("login.php");
}

$cats = get_cats();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>محصول جدید</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<div id="main">
    <h1 class="title">محصول جدید</h1>
    <div class="sidebar">
        <ul>
            <li><a href="products.php">مشاهده فروشگاه</a></li>
            <li><a href="products.php">لیست محصولات</a></li>
            <li><a href="add-product.php">افزودن محصول</a></li>
            <li><a href="users.php">لیست کاربران</a></li>
            <li><a href="cats.php">دسته‌بندی‌ها</a></li>
            <li><a href="comments.php">نظرات</a></li>
            <li><a href="orders.php">سفارشات</a></li>
            <li><a href="?admin-logout=1">خروج</a></li>
        </ul>
    </div>
    <div class="content">
        <?php
        if ($message) {
            ?>
            <div class="success-message"><?php echo $message ?></div>
            <?php
        }
        if ($error) {
            ?>
            <div class="error-message"><?php echo $error ?></div>
            <?php
        }
        ?>
        <form action="add-product.php" method="post" enctype="multipart/form-data">
            <input type="text" name="product-name" placeholder="نام محصول"><br>
            <input type="text" name="product-price" placeholder="قیمت محصول"><br>
            <input type="text" name="product-offer-price" placeholder="قیمت ویژه"><br>

            <span style="font-size: 11px;margin-right: 5px">دسته‌بندی محصول:</span>
            <select name="product-cat">
                <option value="0">انتخاب کنید ...</option>
                <?php while ($cat = mysqli_fetch_array($cats)) { ?>
                    <option value="<?php echo $cat['cat_name'] ?>"><?php echo $cat['cat_name'] ?></option>
                <?php } ?>
            </select>
            <br>
            <input type="text" name="product-serial" placeholder="کد محصول"><br>
            <input type="text" name="product-num-in-stock" placeholder="موجودی در انبار"><br>
            <span style="font-size: 11px;margin-right: 5px">وضعیت محصول:</span><select name="product-visibility">
                <option value="active" >فعال</option>
                <option value="not active" >غیرفعال</option>

            </select>
            <br>
            <span style="font-size: 11px;margin-right: 5px">عکس محصول:</span>
            <input type="file" name="product-image"> <br>


            <textarea name="product-desc" id="myTextarea"></textarea>
            <script src='../assets/js/tinymce/tinymce.min.js'></script>
            <script>tinymce.init({
                    selector: '#myTextarea',
                    plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
                    imagetools_cors_hosts: ['picsum.photos'],
                    menubar: 'file edit view insert format tools table help',
                    toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                    toolbar_sticky: true,
                    autosave_ask_before_unload: true,
                    autosave_interval: "30s",
                    autosave_prefix: "{path}{query}-{id}-",
                    autosave_restore_when_empty: false,
                    autosave_retention: "2m",
                    image_advtab: true,
                    /*content_css: '//www.tiny.cloud/css/codepen.min.css',*/
                    link_list: [
                        { title: 'My page 1', value: 'https://www.codexworld.com' },
                        { title: 'My page 2', value: 'https://www.xwebtools.com' }
                    ],
                    image_list: [
                        { title: 'My page 1', value: 'https://www.codexworld.com' },
                        { title: 'My page 2', value: 'https://www.xwebtools.com' }
                    ],
                    image_class_list: [
                        { title: 'None', value: '' },
                        { title: 'Some class', value: 'class-name' }
                    ],
                    importcss_append: true,
                    file_picker_callback: function (callback, value, meta) {
                        /* Provide file and text for the link dialog */
                        if (meta.filetype === 'file') {
                            callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
                        }

                        /* Provide image and alt text for the image dialog */
                        if (meta.filetype === 'image') {
                            callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
                        }

                        /* Provide alternative source and posted for the media dialog */
                        if (meta.filetype === 'media') {
                            callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
                        }
                    },
                    templates: [
                        { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
                        { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
                        { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
                    ],
                    template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
                    template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
                    height: 600,
                    image_caption: true,
                    quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
                    noneditable_noneditable_class: "mceNonEditable",
                    toolbar_mode: 'sliding',
                    contextmenu: "link image imagetools table",
                });
            </script>
            <input type="submit" name="add-product" value="افزودن محصول">
        </form>
    </div>
</div>
</body>
</html>





