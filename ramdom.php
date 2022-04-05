<script src="ckeditor/ckeditor.js"></script>

<form method="POST">
<div class="margin">
                                <label>Bio:</label>
                                <input type="text" id="bio" name="bio" placeholder="Tell us about yourself"
                                    class="form-control form-style" required>
</div>
<div>
    <textarea id="editor" name="editor" placeholder="editor" >


    </textarea>  
    <input type="submit"/>Submit
</div>


</form>

<script src="" >
    CKEDITOR.replace("editor");

    console.log(document.getElementById('editor').value);
</script>