<html>
<div style="margin-left: auto; margin-right: auto; width: 50%">
<form class="form-contact" method="post" action="./functions/f_form.php">
    <table style="margin-top: 10px;">
        <tr style="height: 30px">
            <td>
                <label for="nom"><b>Votre Nom</b></label><span style="color: red;"> *</span>
            </td>
            <td>
                <input id="nom" type="text" name="nom" size="30" required />
            </td>
        </tr>
        <tr style="height: 30px">
            <td>
                <label for="pre"><b>Votre Prénom</b></label><span style="color: red;"> *</span>
            </td>
            <td>
                <input id="pre" type="text" name="pre" size="30" required />
            </td>
        </tr>
        <tr style="height: 30px">
            <td>
                <label for="num"><b>Votre Numéro Client (cf. facture)</b></label><span style="color: red;"> *</span>
            </td>
            <td>
                <input id="num" type="text" name="num" size="20" required />
            </td>
        </tr>
        <tr style="height: 30px">
            <td>
                <label for="tel"><b>Téléphone</b></label><span style="color: red;"> *</span>
            </td>
            <td>
                <input id="tel" type="text" name="tel" size="20" required />
            </td>
        </tr>
        <tr style="height: 30px">
            <td>
                <label for="por"><b>Mobile</b></label>
            </td>
            <td>
                <input id="por" type="text" name="por" size="20" />
            </td>
        </tr>
        <tr style="height: 30px">
            <td>
                <label for="mai"><b>Email</b></label><span style="color: red;"> *</span>
            </td>
            <td>
                <input id="mai" type="email" name="mai" size="30" required />
            </td>
        </tr>
        <tr style="height: 30px">
            <td>
                <label for="ent"><b>Votre Entreprise</b></label><span style="color: red;"> *</span>
            </td>
            <td>
                <input id="ent" type="text" name="ent" size="50" required />
            </td>
        </tr>
    </table>
    <br />
    <table>
        <tr style="height: 30px">
            <td>
                <span><b>La Machine qui vous pose problème ?</b></span><span style="color: red;"> *</span>
            </td>
            <td>
                <label for="mar" style="font-size: 0.7em;">Marque :</label>
                <select id="mar" name="mar" required>
                    <option value="Canon">Canon</option>
                    <option value="Develop">Develop</option>
                    <option value="Epson">Epson</option>
                </select>
            </td>
            <td>&nbsp;</td>
            <td>
                <label for="mod" style="font-size: 0.7em;">Modèle :</label> <input id="mod" type="text" size="30" name="mod" required />
            </td>
        </tr>
    </table>
    <table>
        <tr style="height: 30px">
            <td>
                <span><b>Possédez-vous un serveur ?</b></span>
            </td>
            <td style="font-size: 0.7em; padding-right: 5px;">
                <label for="ser1">Oui</label><input id="ser1" name="ser" type="radio" value="Oui" required />
            </td>
            <td style="font-size: 0.7em; padding-right: 5px;">
                <label for="ser2">Non</label><input id="ser2" name="ser" type="radio" value="Non" required />
            </td>
            <td style="font-size: 0.7em; padding-right: 15px;">
                <label for="ser3">Je ne sais pas</label> <input id="ser3" name="ser" type="radio" value="Je ne sais pas" required />
            </td>
            <td>
                <label for="tser"><b>Si oui, précisez le type</b></label>
                <select id="tser" name="tser">
                    <option value="   " selected>...</option>
                    <option value="Windows 2000 Server">Windows 2000 Server</option>
                    <option value="Windows 2003 Server">Windows 2003 Server</option>
                    <option value="Windows 2008 Server">Windows 2008 Server</option>
                    <option value="Windows 2008 Server">Windows 2012 Server</option>
                    <option value="Windows 2008 Server">Windows Small Business 2011</option>
                    <option value="Mac OS X Server Tiger 10.4">Mac OS X Server Tiger 10.4</option>
                    <option value="Mac OS X Server Leopard 10.5">Mac OS X Server Leopard 10.5</option>
                    <option value="Mac OS X Server Snow Leopard 10.6">Mac OS X Server Snow Leopard 10.6</option>
                    <option value="Mac OS X Server Snow Leopard 10.6">Mac OS X Server Lion 10.7</option>
                    <option value="Mac OS X Server Snow Leopard 10.6">Mac OS X Server Mountain Lion 10.8</option>
                    <option value="Suse Linux Entreprise Server">Suse Linux Entreprise Server</option>
                    <option value="Mandriva Linux Entreprise Server">Mandriva Linux Entreprise Server</option>
                    <option value="Ubuntu Linux Server">Ubuntu Linux Server</option>
                    <option value="Autre Serveur">Autre Serveur</option>
                </select>
            </td>
        </tr>
    </table>
    <table>
        <tr style="height: 30px">
            <td>
                <label for="sys"><b>Sur quel système d'exploitation travaillez-vous ?</b></label><span style="color: red;"> *</span>
            </td>
            <td>
                <select id="sys" name="sys" required>
                    <option value="Windows 2000">Windows 2000</option>
                    <option value="Windows XP">Windows XP</option>
                    <option value="Windows Vista">Windows Vista</option>
                    <option value="Windows 7">Windows 7</option>
                    <option value="Windows 8">Windows 8</option>
                    <option value="Windows 10">Windows 10</option>
                    <option value="Mac OS X Tiger 10.4">Mac OS X Tiger 10.4</option>
                    <option value="Mac OS X Leopard 10.5">Mac OS X Leopard 10.5</option>
                    <option value="Mac OS X Snow Leopard 10.6">Mac OS X Snow Leopard 10.6</option>
                    <option value="Mac OS X Lion 10.7">Mac OS X Lion 10.7</option>
                    <option value="Mac OS X Mountain Lion 10.8">Mac OS X Mountain Lion 10.8</option>
                    <option value="Linux Suse">Linux Suse</option>
                    <option value="Linux Mandriva">Linux Mandriva</option>
                    <option value="Linux Fedora">Linux Fedora</option>
                    <option value="Linux Red Hat">Linux Red Hat</option>
                    <option value="Linux Ubuntu">Linux Ubuntu</option>
                    <option value="Linux Debian">Linux Debian</option>
                    <option value="Autre Système">Autre Système</option>
                </select>
            </td>
        </tr>
    </table>
    <table>
        <tr style="height: 30px">
            <td>
                <span><b>Le type de problème que vous rencontrez</b></span><span style="color: red;"> *</span>
            </td>
            <td style="font-size: 0.7em; padding-right: 5px;">
                <label for="pb1">Impression   </label><input id="pb1" type="checkbox" name="pb1" value="Impression" />
            </td>
            <td style="font-size: 0.7em; padding-right: 5px;">
                <label for="pb2">Scan   </label><input id="pb2" type="checkbox" name="pb2" value="Scan" />
            </td>
            <td style="font-size: 0.7em; padding-right: 5px;">
                <label for="pb3">Fax   </label><input id="pb3" type="checkbox" name="pb3" value="Fax" />
            </td>
            <td style="font-size: 0.7em; padding-right: 5px;">
                <label for="pb4">Copie   </label><input id="pb4" type="checkbox" name="pb4" value="Copie" />
            </td>
        </tr>
    </table>
    <table style="margin-top: 10px;">
        <tr style="height: 30px">
            <td width="150px">
                <label for="det"><b>Merci de décrire<br> votre problème</b></label><span style="color: red;"> *</span>
            </td>
            <td>
                <textarea id="det" name="det" style="width: 500px; min-width: 500px; max-width: 900px; height: 150px; min-height: 150px; max-height: 300px; overflow: hidden" required></textarea>
            </td>
        </tr>
        <tr style="height: 30px">
            <td>&nbsp;</td>
            <td style="color: red; text-align: right; font-style: italic; font-size: 0.6em;">
                <span style="color: red;">*</span> Champs Obligatoires
            </td>
        </tr>
        <tr style="height: 30px">
            <td>&nbsp;</td>
            <td style="text-align: center;">
                <md-button name="support-val" type="submit" class="md-raised" style="padding: 10px; background-color: #222222; font-weight: bold; color: #aacc44;">Valider</md-button>
            </td>
        </tr>
    </table>
</form>
</div>
</html>