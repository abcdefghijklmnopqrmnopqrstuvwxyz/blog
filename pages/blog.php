<main class="text-center">
    <div class="d-flex justify-content-center">
        <div class="container mt-5">
            <h1 class="p-5 text-container-2">Create your own blog</h1>
            <form class="fs-2 m-5" action="./blogsystem/publish.php" method="POST" enctype="multipart/form-data">
                <div class="my-5 text-container-6">
                    <label>Title</label>
                    <input class="form-control" name="title" type="text" placeholder="Blog Title" minlength="3" required>
                </div>
                <div class="my-5 text-container-6">
                    <label for="text">Description</label>
                    <textarea class="form-control" name="text" rows="5" placeholder="Blog Description" minlength="10" required></textarea>
                </div>
                <div class="my-5 text-container-6">
                    <label for="image">Image:</label>
                    <input class="btn" name="image" type="file" accept="image/*" id="fileInput">
                    <script>
                        document.getElementById('fileInput').addEventListener('change', function() {
                            const fileInput = document.getElementById('fileInput');
                            const selectedFile = fileInput.files[0];
                            if (selectedFile && selectedFile.type.startsWith('image/')) {
                            } else {
                                alert('Please select image.');
                                fileInput.value = '';
                            }
                        });
                    </script>
                </div>
                <div class="row justify-content-end my-5">
                    <button type="submit" class="btn btn-primary fs-4 col-lg-2 mt-4 col-sm-3 col-5">Publish</button>
                </div>
            </form>
        </div>
    </div>
</main>