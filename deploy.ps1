$ftpHost = "ftpupload.net"
$ftpUser = "if0_41619495"
$ftpPass = "MK9uTtNFiCQNne"
$remoteBase = "htdocs"

# Get all files excluding .git and scripts
$files = Get-ChildItem -Recurse -File | Where-Object { 
    $_.FullName -notlike "*\.git\*" -and 
    $_.Name -ne "deploy.ps1" -and 
    $_.Name -ne "ftp_pass.txt" 
}

Write-Host "Starting deployment to $ftpHost..."

foreach ($file in $files) {
    # Calculate relative path
    $relativePath = $file.FullName.Replace((Get-Location).Path + "\", "").Replace("\", "/")
    $remotePath = "$remoteBase/$relativePath"
    
    Write-Host "Uploading: $relativePath -> $remotePath"
    
    # Use curl to upload. Encode spaces in remote path.
    $userAuth = "${ftpUser}:${ftpPass}"
    $encodedRemotePath = $remotePath.Replace(" ", "%20")
    & curl.exe -T "$($file.FullName)" --user $userAuth "ftp://$ftpHost/$encodedRemotePath" --ftp-create-dirs -s



    
    if ($LASTEXITCODE -ne 0) {
        Write-Error "Failed to upload $($file.Name)"
    }
}

Write-Host "Deployment complete!"
