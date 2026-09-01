<?php
// Execute the literal command via shell execution
$hostname = shell_exec('hostname');

// Trim to clean up any trailing newlines from the command output
echo "Hostname: " . trim($hostname);
?>
