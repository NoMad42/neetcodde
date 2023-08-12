Get-ChildItem -Path *Test.php -Recurse |
Select-Object -ExpandProperty FullName |
ForEach-Object -Process { php $_ }