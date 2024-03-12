<?php
// 显示分页链接
echo "<div class='pagination'>";
if ($currentPage > 1) {
    echo "<a href='?page=1' class='page'>首页</a>";
    echo "<a href='?page=" . ($currentPage - 1) . "' class='page'>前一页</a>";
}

for ($i = 1; $i <= $totalPages; $i++) {
    $link = $i == $currentPage ? "current" : "page";
    echo "<a href='?page=$i' class='$link'>$i</a> ";
}

if ($currentPage < $totalPages) {
    echo "<a href='?page=" . ($currentPage + 1) . "' class='page'>下一页</a>";
    echo "<a href='?page=$totalPages' class='page'>尾页</a>";
}

echo "</div>";