<div syle="display: none;" id="modalConfig" class="modal">
	<div class="modal-content">
		<span class="modalClose">&times;</span>
		<h2><?php p($l->t('Welcome to GESTION')); ?> 2.4.1</h2>
		<p style="font-size:14px;margin-bottom:20px;"><b><?php p($l->t('To start with this application you need to configure your company information, follow this link')); ?></b> &#128073;<a style="font-size:20px;" href="<?php echo ($_['url']['config']); ?>"><?php p($l->t('My company')); ?></a></p>
		<p style="font-size:16px;"><b><?php p($l->t('If you like my work you can:')); ?> &#129321; <a href="https://www.buymeacoffee.com/benjaminaimard"><?php p($l->t('buy me a coffee')); ?></a></b> &#129321;</p>
		<p style="margin-bottom:20px;"><?php p($l->t('If you need documentation, follow this link')); ?> &#128073; <a href="https://baimard.github.io/gestion/"><?php p($l->t('Documentation')); ?></a>
		<br/>	<?php p($l->t('Others questions?')); ?> &#128073; <a href="mailto:contact@cybercorp.fr"><?php p($l->t('Contact')); ?></a>
		<br/>	<?php p($l->t('Leave me a comment, but only if you like this application :)')); ?> &#128073; <a href="https://apps.nextcloud.com/apps/gestion"><?php p($l->t('Nextcloud apps')); ?></a>
		<br/>	<?php p($l->t('Want to talk with the community?')); ?> &#128073; <a href="https://github.com/baimard/gestion/discussions"><?php p($l->t('Git discussion')); ?></a>
		<br/>	<?php p($l->t('Have an issue?')); ?> &#128073; <a href="https://github.com/baimard/gestion/issues"><?php p($l->t('Git discussion')); ?></a>
		<hr />
		<h2><?php p($l->t('Newsletter')); ?></h2>
		<p><?php p($l->t('The objective of the MANAGEMENT application is to provide a simple and free business management solution to all freelancers. There are too many complex applications on the market which are very expensive and a simple Excel file does not allow effective management of its activity. So, with each new version, I try to bring new features that you request from me via GitHub. Your contributions are essential for me to understand your need. I\'m very happy to help fledgling businesses through open source. To be always more efficient, we have worked with a lawyer to provide you with valuable legal assistance. You will therefore find a section with legal notices. We already have a very complete legal notice for France and we would like to develop this. If you want to contribute contact us!')); ?></p>
		<hr/>
		<h2><?php p($l->t('Changelog')); ?></h2>
		<p><a href="https://github.com/baimard/gestion/releases"><?php p($l->t('Releases')); ?></a></p>
		<hr/>
		<h2><?php p($l->t('Special thanks to:')); ?></h2>
		<ul>
			<li>Timo RAINO - <?php p($l->t('for the big work on legal notice for France')); ?></li>
			<li>Aaron Stevens - <?php p($l->t('for the coffee ;)')); ?></li>
			<li>@CarlKDE - <?php p($l->t('for the coffee ;)')); ?></li>
			<li>little5bull - <?php p($l->t('for the coffee ;)')); ?></li>
		</ul>
	</div>
</div>

<div id="modalMail" class="modal">
	<div class="modal-content">
		<span class="modalClose">&times;</span>
		<h2><?php p($l->t('Send an email')); ?></h2>
		<label for="from"><?php p($l->t('From')); ?></label>
		<input disabled id="from"style="width:100%" type="text" value="" />true
		<label for="to"><?php p($l->t('To')); ?></label>
		<input required id="to"style="width:100%" type="text" value="" title="<?php p($l->t('Separate multiple recipients by ";"')); ?>" />
		<label for="Cc"><?php p($l->t('Cc')); ?></label>
		<input id="Cc"style="width:100%" type="text" value="" title="<?php p($l->t('Empty if not used')); ?>" />
		<label for="subject"><?php p($l->t('Subject')); ?></label>
		<input required id="subject" style="width:100%" type="text" value="<?php p($l->t('Your invoice/quote')); ?>" />
		<label for="body"><?php p($l->t('Body')); ?></label>
		<textarea required style="width:100%" id="body">
			<?php p($l->t('Dear,')); ?>
			<br/>
			<?php p($l->t('Attached to this email you will find a new document.')); ?>
			<br/>
			<?php p($l->t('Best regards,')); ?>
		</textarea>
		<button id="sendmail"><?php p($l->t('Send')); ?></button>
	</div>
</div>

<div id="ConfigurationHelp" class="modal">
	<div class="modal-content">
		<span class="modalClose">&times;</span>
		<h2><?php p($l->t('Configuration help')); ?></h2>
		<hr/>
		<h2><?php p($l->t('Company name')); ?></h2>
		<div class="ConfigurationHelp"><?php p($l->t('This is the name of the company that will appear in the footer of your quote and invoice. For example, you can set: "Company: Cybercorp" or just "Cybercorp".')); ?></div>
		<h2><?php p($l->t('Your company contact first name')); ?></h2>
		<div class="ConfigurationHelp"><?php p($l->t('First name appears in the Quote/Invoice header as a contact.')); ?></div>
		<h2><?php p($l->t('Your company contact last name')); ?></h2>
		<div class="ConfigurationHelp"><?php p($l->t('Last name appears in the Quote/Invoice header as a contact.')); ?></div>
		<h2><?php p($l->t('Company legal information line one')); ?></h2>
		<div class="ConfigurationHelp"><?php p($l->t('This is the first line in the footer of your Quote/Invoice with all legal information you need.')); ?></div>
		<h2><?php p($l->t('Company legal information line two')); ?></h2>
		<div class="ConfigurationHelp"><?php p($l->t('This is the second line in the footer of your Quote/Invoice with all legal information you need.')); ?></div>
		<h2><?php p($l->t('Your company address')); ?></h2>
		<div class="ConfigurationHelp"><?php p($l->t('Show company address in the Quote/Invoice header.')); ?></div>
		<h2><?php p($l->t('Your company phone')); ?></h2>
		<div class="ConfigurationHelp"><?php p($l->t('Show phone number in the Quote/Invoice header.')); ?></div>
		<h2><?php p($l->t('Your company email')); ?></h2>
		<div class="ConfigurationHelp"><?php p($l->t('E-mail address which appears in the header of the Quote/Invoice.')); ?></div>
		<h2><?php p($l->t('Your company VAT rate')); ?></h2>
		<div class="ConfigurationHelp"><?php p($l->t('Global Default VAT rate apply to your Quote/Invoice (globally), to change it, just insert VAT rate amount without the percent sign.')); ?></div>	
		<h2><?php p($l->t('Automatically generated invoice number')); ?></h2>
		<div class="ConfigurationHelp"><?php p($l->t('If you want to automatically generated an invoice number, set to enable. If you want to be free, set disable. You can enable and disable when you want.')); ?></div>	
		<h2><?php p($l->t('Global default Currency')); ?></h2>
		<div class="ConfigurationHelp"><?php p($l->t('Global currency for the application.')); ?></div>
		<h2><?php p($l->t('Legal disclaimer/mentions')); ?></h2>
		<div class="ConfigurationHelp"><?php p($l->t('Legal disclaimer/mentions you need in your footer - before company information.')); ?></div>
	</div>
</div>
