This directory is necessary to store temporary files, despite being normally
empty. The PHP may not be able to recreate if it does not have the permission
setted, a very likely thing when updating a folder from github on a local
computer. Have the predetermined directory structure is better to track error in
case the PHP is not allowed to write in.
