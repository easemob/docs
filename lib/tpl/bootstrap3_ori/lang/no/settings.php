<?php
/**
 * Norwegian Language file for config
 *
 * @author   Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @author   Torkill Bruland
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

$lang['bootstrapTheme']               = 'Bootstrap-temaet';
$lang['bootstrapTheme_o_bootswatch']  = 'Bootswatch.com-tema';
$lang['bootstrapTheme_o_custom']      = 'Tilpasset bootstrap-tema';
$lang['bootstrapTheme_o_default']     = 'Vanlig bootstrap-tema';
$lang['bootstrapTheme_o_optional']    = 'Alternativt bootstrap-tema';
$lang['bootswatchTheme']              = 'Velg tema fra Bootswatch.com';
$lang['browserTitle']                 = 'DokuWiki nettlesertittel (standard er <code>@TITLE@ [@WIKI@]</code>, der <code>@TITLE@</code>-plassholderen erstatter den nåværende sidetittel og <code>@WIKI@</code> erstatter DokuWiki-navnet) - se <a class="interwiki iw_doku" href="#config___title">tittel</a> config';
$lang['browserTitleCharSepNS']        = 'Tegn-separator for hvert navnerom i nettleserens tittel';
$lang['browserTitleOrderNS']          = 'Sett rekkefølgen av navnerom';
$lang['browserTitleShowNS']           = 'Vis forrige sides sidenavn i den nåværende siden i nettleserens tittel';
$lang['collapsibleSections']          = 'Slå sammen 2. seksjon (nyttig for mobile enheter)';
$lang['cookieLawBannerPage']          = 'Sidenavn for Cookie-lov-banner';
$lang['cookieLawPolicyPage']          = 'Sidenavn for Cookie-lovs policy-side';
$lang['customTheme']                  = 'Sett inn URL for tilpasset tema';
$lang['discussionPage']               = 'Diskusjonssides navn (standard er <code>diskusjon:@ID@</code>, der <code>@ID@</code>-plassholderen erstatter det nåværene sidenavn), tomt felt deaktiverer lenken';
$lang['fixedTopNavbar']               = 'Fest Navigasjonslinja til toppen';
$lang['fluidContainer']               = 'Slå på flytende innholds-elementer (side i full bredde)';
$lang['fluidContainerBtn']            = 'Vis en knapp i Navigasjonslinja for utvidelse av innholds-elementer';
$lang['googleAnalyticsAnonymizeIP']   = 'Anonymiser besøkernes IP-adresse';
$lang['googleAnalyticsNoTrackAdmin']  = 'Slå av sporing for Admin-brukeren';
$lang['googleAnalyticsNoTrackPages']  = 'Slå av sporing for spesifikke sider (sett inn regexp)';
$lang['googleAnalyticsNoTrackUsers']  = 'Slå av sporing for alle innloggede brukere';
$lang['googleAnalyticsTrackActions']  = 'Spor DokuWiki-handlinger (redigeringer, søk, etc.)';
$lang['googleAnalyticsTrackID']       = 'Sporings-ID';
$lang['hideInThemeSwitcher']          = 'Skjul temaer i Tema-velger';
$lang['hideLoginLink']                = 'Skjul innloggings-knapp i Navigasjonslinja. Dette alternativet er nyttig "read-only"-installasjoner av Dokuwiki (dvs. blogg, personlig nettsted)';
$lang['individualTools']              = 'Del av Verktøy i en individuell meny i Navigasjonslinja';
$lang['inverseNavbar']                = 'Inverter navigasjonslinja';
$lang['landingPages']                 = 'Landingssides navn (sett inn regex)';
$lang['leftSidebarGrid']              = 'Venstre sidelinje grid-klasser <code>col-{xs,sm,md,lg}-x</code> (se <a href="http://getbootstrap.com/css/#grid" target="_blank">Bootstrap Grids</a> for dokumentasjon)';
$lang['navbarLabels']                 = 'Vis/Skjul individuelle etiketter';
$lang['pageIcons']                    = 'Velg ikoner som skal vises';
$lang['pageInfo']                     = 'Vis/Skjul side-info-elementer';
$lang['pageInfoDateFormat']           = 'Datoformat';
$lang['pageInfoDateFormat_o_dformat'] = 'DokuWiki-format';
$lang['pageInfoDateFormat_o_human']   = 'Menneskeleselig';
$lang['pageOnPanel']                  = 'Slå på panelet rundt siden';
$lang['rightSidebar']                 = 'Sidenavn for Høyre Sidelinje. Tomt felt deaktiverer høyre sidelinje.<br/>Høyre Sidelinje vises bare når standard DokuWiki <a class="interwiki iw_doku" href="#config___sidebar">sideline</a> er slått på og <code>venstre</code> posisjon er slått på (se <a class="interwiki iw_doku" href="#config___tpl____bootstrap3____sidebarPosition">sidebarPosisjon</a> for konfigurering). Hvis du bare ønsker DokuWiki sideline på høyre side, sett da opp konfigurasjonen av <a class="interwiki iw_doku" href="#config___tpl____bootstrap3____sidebarPosition">sidebarPosisjon</a> med verdien <code>høyre</code> value';
$lang['rightSidebarGrid']             = 'Høyre sideline grid-klasser <code>col-{xs,sm,md,lg}-x</code> (se <a href="http://getbootstrap.com/css/#grid" target="_blank">Bootstrap Grids</a>-dokumentasjon)';
$lang['schemaOrgType']                = 'Schema.org type (<code>Artikkel</code>, <code>NyhetsArtikkel</code>, <code>TechArtikkel</code>, <code>BloggPost</code>, <code>Oppskrift</code>)';
$lang['semantic']                     = 'Aktiver semantiske data';
$lang['showAdminMenu']                = 'Vis Administrasjons-menyen';
$lang['showBadges']                   = 'Vis emblem-knapper  (DokuWiki, Donere, etc)';
$lang['showCookieLawBanner']          = 'Vis Cookie-lov-banneret i sidefot';
$lang['showDiscussion']               = 'Vis diskusjons-lenke i verktøy-menyen';
$lang['showHomePageLink']             = 'Vis lenka Hjemme-side i navigasjonslinja';
$lang['showIndividualTool']           = 'Slå på/av individuelle verktøy i Navigasjonslinja';
$lang['showLandingPage']              = 'Slå på landings-siden (uten sidepanel og panelet rundt siden)';
$lang['showLoginOnFooter']            = 'Vis en "liteb" innloggings-lenke i sidefoten. Dette alternativet er nyttig når  <code>hideLoginLink</code> er på';
$lang['showNavbar']                   = 'Vis hook for navigasjonslinja';
$lang['showNavbar_o_always']          = 'Alltid';
$lang['showNavbar_o_logged']          = 'Når logget inn';
$lang['showPageIcons']                = 'Vis nyttige ikoner (utskrift, del lenke, send epost, etc.) på siden';
$lang['showPageId']                   = 'Vis DokuWikiens sidenavn (pageid) øverst';
$lang['showPageInfo']                 = 'Vis sideinfo (dvs. dato, forfatter)';
$lang['showPageTools']                = 'Aktiver Sideverktøy for Dokuwiki-stil';
$lang['showPageTools_o_always']       = 'Alltid';
$lang['showPageTools_o_logged']       = 'Når logget inn';
$lang['showPageTools_o_never']        = 'Aldri';
$lang['showSearchButton']             = 'Vis søkeknapp i Navigasjonsmenyen';
$lang['showSearchForm']               = 'Vis søkeskjema i Navigasjonsmenyen';
$lang['showSearchForm_o_always']      = 'Alltid';
$lang['showSearchForm_o_logged']      = 'Når innlogget';
$lang['showSearchForm_o_never']       = 'Aldri';
$lang['showThemeSwitcher']            = 'Vis Bootswatch.com sin tema-velger i Navigasjonsmenyen';
$lang['showTools']                    = 'Vis Verktøy i Navigasjonsmenyen';
$lang['showTools_o_always']           = 'Alltid';
$lang['showTools_o_logged']           = 'Når logget inn';
$lang['showTools_o_never']            = 'Aldri';
$lang['showTranslation']              = 'Vis verktøylinje for oversettelser (krever <em>Translation Plugin</em>)';
$lang['showUserHomeLink']             = 'Vis lenke til Brukerhjemmeside i Navigasjonslinja';
$lang['sidebarPosition']              = 'Posisjonen på DokuWiki Sidelinje (<code>venstre</code> eller <code>høyre</code>)';
$lang['socialShareProviders']         = 'Velg hvilke sosiale delings-lenker som skal vises';
$lang['tableFullWidth']               = 'Slå på 100% bredde på tabeller (Bootstrap standardverdi)';
$lang['tableStyle']                   = 'Tabell-stil';
$lang['tagsOnTop']                    = 'Flytt alle Tagger på toppen av siden, ved siden av side-id (Krever  <em>Tag Plugin</em>)';
$lang['tocAffix']                     = 'Heft Innholdsfortegnelsen ved rulling av siden';
$lang['tocCollapseOnScroll']          = 'Slå sammen Innholdsfortegnelsen ved rulling';
$lang['tocCollapseSubSections']       = 'Slå sammen under-seksjoner i Innholdsfortegnelsen for å spare plass';
$lang['tocPosition']                  = 'Innholdsfortegnelsens posisjon';
$lang['useACL']                       = 'Bruk ACL for sidelinjer (venstre og høyre) og for alle DokuWiki-hooks (eg. <code>:sidebar</code>, <code>:navbar</code>, etc.) <br/> <strong>MERK:</strong> Tilgjengelig siden utgaven "Elenor of Tsort"';
$lang['useAnchorJS']                  = 'Bruk AnchorJS';
$lang['useGoogleAnalytics']           = 'Slå på  Google Analytics';
$lang['useGravatar']                  = 'Last Gravatar-bilde';
$lang['useLegacyNavbar']              = 'Bruk gammel og frarådet <code>navbar.html</code> hook (vurder for fremtiden å bruke <code>:navbar</code> hook)';
$lang['useLocalBootswatch']           = 'Bruk lokal Bootswatch-mappe. Dette alternativet er nyttig DokuWiki-installasjon i "intranet".';
