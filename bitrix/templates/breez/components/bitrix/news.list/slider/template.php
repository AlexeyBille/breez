<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="slider">
    <? foreach($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->addExternalJS("js/script.js");
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <a class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" href="<? print_r($arItem['DISPLAY_PROPERTIES']['ATT_LINK']['VALUE'])?>">
            <img src="<?echo $arItem["DETAIL_PICTURE"]['SRC']?>"
                 alt="<?=$arItem["DETAIL_PICTURE"]["ALT"]?>"
                 title="<?=$arItem["DETAIL_PICTURE"]["TITLE"]?>"
                 class="img-responsive">
            <h3><? echo $arItem["NAME"]; ?></h3>
            <p><? echo $arItem["DETAIL_TEXT"]; ?></p>
        </a>
    <? endforeach; ?>
</div>
