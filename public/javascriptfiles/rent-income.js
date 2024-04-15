
// <!-- this is for files 1 -->
function filesOne() {

       var inputImages = document.getElementById("input-image");
        var fileListContainer = document.getElementById("file-list");
        var fileSummary = document.getElementById("file-summary");

        inputImages.addEventListener("change", function(event) {
            // Clear existing file names and summary
            fileListContainer.innerHTML = "";
            fileSummary.textContent = "";
            fileListContainer.style.marginTop = "10px";
            if (event.target.files.length === 0) {
                return;
            } else {
                for (var i = 0; i < event.target.files.length; i++) {
                    var file = event.target.files[i];

                    // Create a div to hold file information
                    var fileDiv = document.createElement("div");
                    fileDiv.style.marginTop = "-6px"; // Adjust the value as needed
                    fileDiv.style.fontWeight = "600"; // Adjust the value as needed


                    // Create span tag for file name
                    var fileNameParagraph = document.createElement("span");
                    fileNameParagraph.textContent = "File Name: " + file.name;
                    fileDiv.appendChild(fileNameParagraph);

                    // Append the file information to the container
                    fileListContainer.appendChild(fileDiv);
                }

                // Update the summary message
                fileSummary.textContent = "You have selected " + event.target.files.length + " file(s).";

            }
        });

 
}


// <!-- this is for folder 1 -->
function folderOne() {
     // <!-- this is for folder 1 -->
     var inputFolder = document.getElementById("uploadfolder");
     var folderListContainer = document.getElementById("folder-list");
     var uniqueFolders = new Set();

     inputFolder.addEventListener("change", function(event) {
         if (event.target.files.length === 0) {
             return;
         } else {
             uniqueFolders.clear();
             displayUniqueFolders(event.target.files);
         }
     });

     function displayUniqueFolders(files) {
         // Clear previous content
         folderListContainer.innerHTML = '';

         for (var i = 0; i < files.length; i++) {
             var file = files[i];

             // Extract folder name
             var folderName = file.webkitRelativePath.split("/")[0];

             // Check if the folder name is unique
             if (!uniqueFolders.has(folderName)) {
                 uniqueFolders.add(folderName);

                 // Create a container for the folder
                 var folderContainer = document.createElement("div");
                 folderContainer.classList.add("folder-container");

                 // Create a div to hold folder information
                 var folderDiv = document.createElement("div");
                 folderDiv.classList.add("folder-name");
                 folderDiv.textContent = "Folder Name: " + folderName;
                 folderDiv.onclick = function() {
                     toggleFileList(this.nextElementSibling);
                 };
                 folderContainer.appendChild(folderDiv);

                 // Create a div to hold file list
                 var fileListDiv = document.createElement("div");
                 fileListDiv.classList.add("file-list");

                 // Display files within the folder
                 displayFilesWithinFolder(folderName, files, fileListDiv);

                 // Append the file list to the container
                 folderContainer.appendChild(fileListDiv);

                 // Append the folder container to the main container
                 folderListContainer.appendChild(folderContainer);
             }
         }
     }

     function displayFilesWithinFolder(folderName, files, fileListContainer) {
         for (var i = 0; i < files.length; i++) {
             var file = files[i];

             // Extract folder name
             var currentFolderPath = file.webkitRelativePath.split("/");
             var currentFolderName = currentFolderPath[0];

             // Check if the file is within the current folder or its subfolders
             if (currentFolderPath.length > 1 && currentFolderName === folderName) {
                 // Create paragraph for file name
                 var fileNameParagraph = document.createElement("p");
                 fileNameParagraph.textContent = "File Name: " + currentFolderPath.slice(1).join("/");
                 fileListContainer.appendChild(fileNameParagraph);
             }
         }
     }

     function toggleFileList(fileListContainer) {
         fileListContainer.style.display = (fileListContainer.style.display === 'none') ? 'block' : 'none';
     }
 

}






filesOne();
folderOne();

