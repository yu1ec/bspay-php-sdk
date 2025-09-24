<?php

namespace BsPaySdk;

// 初始化SDK常量和配置
Bootstrap::init();

# 检查是否已有Composer自动加载
if (!class_exists('BsPaySdk\\config\\MerConfig', false)) {
    # 基础 Core 类 - 手动加载（向后兼容）
    require_once SDK_BASE . "/config/MerConfig.php";
    require_once SDK_BASE . "/core/BsPayRequestV2.php";
    require_once SDK_BASE . "/core/BsPayTools.php";
    require_once SDK_BASE . "/core/BsPay.php";
    require_once SDK_BASE . "/core/BsPayClient.php";
    require_once SDK_BASE . "/request/BaseRequest.php";
    require_once SDK_BASE . "/enums/FunctionCodeEnum.php";
}


