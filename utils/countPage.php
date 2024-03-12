<?php
// 每页大小
$pageSize = 5;

$totalRecord = mysqli_fetch_assoc($totalRecordQuery)['total_records'];

// 计算总页数
$totalPages = ceil($totalRecord / $pageSize);

// 获取当前页码
$currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;

// 确保当前页码在合法范围内
$currentPage = max($currentPage, 1);
$currentPage = min($currentPage, $totalPages);

// 计算当前页的记录范围
$startIndex = ($currentPage - 1) * $pageSize;
$endIndex = $startIndex + $pageSize - 1;