**Version 0.2.2** (06.04.2021)

Custom class "Mautic" to embed Mautic to the page

## CONFIGURATION OPTIONS
$Mautic_URL: URL to Mautic installation
$Mautic_inlineTracking: Embed tracking code inside html
$Mautic_inlineFormScript: Embed form tracking code inside html

## CONFIGURATION FILE
```
"mautic": {
  "url": "https://example.ccom/mautic",
  "inlineTracking": 0;
  "inlineFormScript": 0;
}
```

## USAGE
Return dynamic content
```
[mautic slot="SlotName"]
```
