<form action="#" method="POST" enctype="multipart/form-data" class="bg-white shadow-lg rounded-lg p-6 max-w-3xl mx-auto">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Create a New Course</h1>

    <!-- Thumbnail Upload with Dynamic Behavior -->
    <div class="flex justify-center mb-6">
        <div class="relative flex justify-center w-full md:w-96 h-60 border-2 border-gray-300 rounded-lg overflow-hidden">
            <!-- Image Preview -->
            <img
                id="thumbnail-preview"
                class="w-full h-full object-cover opacity-0"
                src="https://via.placeholder.com/300x200?text=Thumbnail+Preview"
                alt="Thumbnail Preview"
            >
            <!-- Title Overlay -->
            <span
                id="thumbnail-title"
                class="absolute inset-0 flex items-center justify-center bg-gray-50 text-gray-500 font-medium rounded-lg opacity-75"
            >
                Upload Thumbnail
            </span>
            <!-- Hidden File Input -->
            <label for="thumbnail" class="absolute inset-0 cursor-pointer rounded-lg">
                <input type="file" id="thumbnail" name="thumbnail" class="hidden" accept="image/*" required>
            </label>
        </div>
    </div>

    <!-- Course Title -->
    <div class="mb-4">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-700">Course Title</label>
        <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter course title" required>
    </div>

    <!-- Description -->
    <div class="mb-4">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-700">Description</label>
        <textarea id="description" name="description" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Write a brief description" required></textarea>
    </div>

    <!-- Category Dropdown -->
    <div class="mb-4">
        <label for="category" class="block mb-2 text-sm font-medium text-gray-700">Category</label>
        <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 focus:ring-indigo-500 focus:border-indigo-500" required>
            <option value="">Select a category</option>
            <option value="web-development">Web Development</option>
            <option value="design">Design</option>
            <option value="data-science">Data Science</option>
        </select>
    </div>

    <!-- Tags -->
    <div class="mb-4">
        <label for="tags" class="block mb-2 text-sm font-medium text-gray-700">Tags</label>
        <input type="text" id="tags" name="tags" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Add tags separated by commas" required>
    </div>

    <!-- Course Content Section -->
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-700">Course Content</label>
        <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4 w-full">
            <!-- Upload Video Button -->
            <button type="button" id="select-video" class="w-full p-4 border border-gray-300 rounded-lg bg-gray-50 hover:bg-indigo-50 outline-none ring-indigo-500 ring-offset-2">
                <i class="fas fa-video text-indigo-500"></i>
                <span class="ml-2">Upload Video</span>
            </button>

            <!-- Upload Document Button -->
            <button type="button" id="select-document" class="w-full p-4 border border-gray-300 rounded-lg bg-gray-50 hover:bg-indigo-50 outline-none ring-indigo-500 ring-offset-2">
                <i class="fas fa-file-alt text-indigo-500"></i>
                <span class="ml-2">Upload Document</span>
            </button>
        </div>
    </div>

    <!-- Dynamic Upload Input -->
    <div id="upload-section" class="hidden mb-6">
        <!-- Video Upload Input -->
        <div id="video-upload" class="hidden">
            <label for="video-content" class="block mb-2 text-sm font-medium text-gray-700">Upload Video</label>
            <div class="relative">
                <input type="file" id="video-content" name="video-content" class="hidden" accept="video/mp4" />
                <label for="video-content" class="flex items-center justify-between px-4 py-2 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg cursor-pointer hover:bg-indigo-50">
                    <span id="video-file-name" class="text-sm text-gray-500">Choose a video file</span>
                    <i class="fas fa-upload text-indigo-500"></i>
                </label>
            </div>
        </div>

        <!-- Document Upload Input -->
        <div id="document-upload" class="hidden">
            <label for="document-content" class="block mb-2 text-sm font-medium text-gray-700">Upload Document</label>
            <div class="relative">
                <input type="file" id="document-content" name="document-content" class="hidden" accept="application/pdf,application/msword" />
                <label for="document-content" class="flex items-center justify-between px-4 py-2 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg cursor-pointer hover:bg-indigo-50">
                    <span id="document-file-name" class="text-sm text-gray-500">Choose a document file</span>
                    <i class="fas fa-upload text-indigo-500"></i>
                </label>
            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="w-full py-2.5 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
        Create Course
    </button>
</form>

<script>
    const thumbnailInput = document.getElementById('thumbnail');
    const thumbnailPreview = document.getElementById('thumbnail-preview');
    const thumbnailTitle = document.getElementById('thumbnail-title');

    // Update Thumbnail on File Upload
    thumbnailInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = () => {
                thumbnailPreview.src = reader.result;
                thumbnailPreview.classList.remove('opacity-0');
                thumbnailTitle.classList.add('hidden');
            };
            reader.readAsDataURL(file);
        }
    });

    const selectVideoBtn = document.getElementById('select-video');
    const selectDocumentBtn = document.getElementById('select-document');
    const videoUpload = document.getElementById('video-upload');
    const documentUpload = document.getElementById('document-upload');
    const uploadSection = document.getElementById('upload-section');

    const videoInput = document.getElementById('video-content');
    const documentInput = document.getElementById('document-content');
    const videoFileName = document.getElementById('video-file-name');
    const documentFileName = document.getElementById('document-file-name');

    // Function to toggle between video and document upload
    function toggleUpload(type) {
        uploadSection.classList.remove('hidden');

        if (type === 'video') {
            selectVideoBtn.classList.add("ring-2");
            selectDocumentBtn.classList.remove("ring-2");

            videoUpload.classList.remove('hidden');
            documentUpload.classList.add('hidden');
            documentInput.value = ''; // Clear document input
            documentFileName.textContent = 'Choose a document file';
        } else if (type === 'document') {
            selectDocumentBtn.classList.add("ring-2");
            selectVideoBtn.classList.remove("ring-2");

            documentUpload.classList.remove('hidden');
            videoUpload.classList.add('hidden');
            videoInput.value = ''; // Clear video input
            videoFileName.textContent = 'Choose a video file';
        }
    }

    // Event Listeners for buttons
    selectVideoBtn.addEventListener('click', () => toggleUpload('video'));
    selectDocumentBtn.addEventListener('click', () => toggleUpload('document'));

    // Update file name display when a file is selected
    videoInput.addEventListener('change', () => {
        videoFileName.textContent = videoInput.files[0]?.name || 'Choose a video file';
    });

    documentInput.addEventListener('change', () => {
        documentFileName.textContent = documentInput.files[0]?.name || 'Choose a document file';
    });
</script>