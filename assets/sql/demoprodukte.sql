drop table shop_product

create table shop_product (
	product_id int AUTO_INCREMENT primary key,
	product_name varchar(100),
	product_descr varchar(3000),
  	product_link varchar(300),
	product_img int
	);

-- Demoprodukte mit Bildern

insert into shop_product (product_id, product_name, product_descr, product_link, product_img) values
-- Gorilla Kaffee
(1, 'Gorilla Superbar Crema', '<h4>Kurzbeschreibung</h4><ul><li>Geschmackvolle und koffeinstarke Kaffeekomposition</li><li>Besonders vollmundiges sowie kräftiges Aroma</li><li>Hellbraune feste Crema</li><li>Traditionelles Trommelröstverfahren</li><li>Ideal für die Zubereitung in Vollautomaten und Siebträgern</li></ul><h4>Produktbeschreibung</h4><p>Die Gorilla Bar Crema ist eine geschmackvolle und koffeinstarke Kaffeekomposition. Dieser Kaffee überzeugt durch sein besonders vollmundiges und kräftiges Aroma. Die Kaffeebohnen stammen fast ausschließlich von Hochlandgewächsen und werden nach der Ernte mit dem traditionellen Trommelröstverfahren bei einer Dauer von zwölf bis 20 Minuten und einer Maximaltemperatur von 220°C geröstet. Aufgrund des langsamen und schonenden Verfahrens können sich die kostbaren Aromen der Gorilla Bar Crema entfalten und Bitterstoffe reduziert werden. Um eine optimale Röstzeit für jede Bohnensorte zu garantieren werden diese in Mischanlagen bearbeitet, um eine sortenspezifische Röstung zu ermöglichen. Diese Kaffeemischung ist ideal für die Zubereitung im Kaffeevollautomaten sowie Siebträger geeignet. Die Kaffeerösterei Joerges bietet seit 2004 die hauseigene Marke Gorilla Kaffee an.</p>', 'https://www.roastmarket.de/gorilla-bar-crema-bohnen-1kg.html', 1),
(2, 'Gorilla Crema No.1', '<h4>Kurzbeschreibung</h4><ul><li>100% feinste Hochland Arabica-Bohnen</li><li>Vollmundig und aromatisch mit dezent nussigen und fruchtigen Geschmacksnoten</li><li>Besonders harmonisch mit stabiler Crema und einem geringen Koffeingehalt</li><li>Im schonenden Trommelröstverfahren geröstet</li><li>Perfekt für die Zubereitung in Vollautomaten und Filtern</li></ul><h4>Produktbeschreibung</h4><p>Der Gorilla Crema No. 1 ist einer der bekannten Kaffees der Gorilla Linie, welcher ausschließlich aus feinsten Hochland-Arabicabohnen hergestellt wird. Die schonende Röstung macht ihn besonders mild. Dennoch ist das Geschmackserlebnis des Gorilla Crema No. 1 vollmundig und aromatisch mit dezent nussigem Aroma und fruchtigen Geschmacksnoten. In der Trommelröstmaschine werden die Bohnen zwischen zwölf und 20 Minuten lang bei maximal 220 °C geröstet. Durch dieses langsame und schonende Verfahren verliert der Kaffee seine Bitterstoffe und das kostbare Aroma kann sich ideal entfalten. Ob als Espresso mit stabiler Crema oder als Kaffee: Der vollmundige Geschmack und seine leichte Säure machen ihn besonders harmonisch. Durch seinen geringen Koffeingehalt wird der Gorilla Crema No. 1 zu jeder Tageszeit zu einem wahren Genuss. Gorilla Kaffees erhalten wir frisch geröstet von der Rösterei!</p>', 'https://www.roastmarket.de/gorilla-crema-no-1-bohnen-1kg.html', 2),
(3, 'Gorilla Superbar Crema', '<h4>Kurzbeschreibung</h4><ul><li>Geschmackvolle Kaffeemischung aus 60% Arabicabohnen und 40% Robustabohnen</li><li>Dunkle Röstung sorgt für intensives Aroma, verfeinert durch nussige und holzige Nuancen</li><li>Sortenreine Bohnen aus kontrollierten Anbauregionen</li><li>Empfohlen wird die Zubereitung im Espressokocher und Kaffeevollautomaten, auch andere Kaffeemaschinen sind möglich</li><li>Gorilla ist die Hausmarke der traditionsreichen Kaffeerösterei A. Joerges aus Obertshausen und steht für exzellenten Genuss</li></ul><h4>Produktbeschreibung</h4><p>Der Superbar Crema von Gorilla zeichnet sich durch eine elegante Mischung von 60% Arabicabohnen und 40% Robustabohnen aus Mittel- und Südamerika aus. Der harmonische Körper wird durch nussige und holzige Geschmacksnuancen akzentuiert. Eine spezielle Reinigung sowie eine schonende dunkle Röstung aus sortenreinen Bohnen verleihen dem Kaffee eine hohe Intensität. Charakteristisch für den Superbar Crema ist auch eine besonders stabile und sahnige Crema, die den Kaffee besonders geschmeidig macht. Für die Zubereitung des Superbar Crema eignen sich alle herkömmlichen Kaffeemaschinen von Espressokocher bis Kaffeevollautomat. Gorilla ist die Hausmarke von der traditionsreichen Kaffeerösterei A. Joerges aus Obertshausen und steht für exzellenten Genuss. Das Sortiment von Gorilla enthält unterschiedliche Varianten, die alle frisch aus der Rösterei geliefert werden und für jeden Geschmack das Richtige bereithalten.</p>', 'https://www.roastmarket.de/gorilla-superbar-crema-bohnen-1kg.html', 3),
(4, 'Gorilla Espresso Impianto', '<h4>Kurzbeschreibung</h4><ul><li>Hochwertige Espresso-Kreation exklusiv bei <strong>roast</strong>market erhältlich</li><li>Erlesene Mischung aus feinsten Hochland Arabica-Bohnen aus Südamerika</li><li>Nach italienischer Art schonend im traditionellen Trommelröster langzeitgeröstet</li><li>Weicher Körper mit schokoladigen Nuancen und einem fruchtigen Abgang</li><li>Sowohl für Siebträger als auch für Vollautomaten bestens geeignet</li></ul><h4>Produktbeschreibung</h4><p>Die für <strong>roast</strong>market exklusive Espresso Impianto Mischung ist die jüngste Kreation aus der Gorilla Kaffee Linie. Hierbei handelt es sich um eine erlesene Mischung aus den feinsten Hochland Arabica Bohnen aus Südamerika, Mittelamerika und Indien. Ihr vollmundiges und blumiges Aroma gewinnt diese Komposition nach einer schonenden Langzeitröstung in einem traditionellem Trommelröster. Das Röstverfahren nach italienischer Art verleiht den Bohnen eine harmonisch-mittlere Stärke und formt den weichen Körper dieser Mischung. Das einmalige Geschmackserlebnis beginnt mit einer schokoladigen Nuance, gefolgt von einem milden fruchtigen Abgang. Dabei bietet diese Röstung eine ausgezeichnet feste rehbraune Crema. Zubereitet in einem Kaffeevollautomat oder einem Siebträger ist sie eine Bereicherung für jeden Espresso-Liebhaber.</p>', 'https://www.roastmarket.de/gorilla-espresso-impianto-1kg.html', 4),
(5, 'Gorilla Café Creme', '<h4>Kurzbeschreibung</h4><ul><li>100% feinste Arabica-Bohnen traditionell geröstet</li><li>Überzeugt durch eine schöne Crema sowie ein sanftes und harmonisches Aroma</li><li>Der Kaffee hat einen geringen Koffeingehalt</li><li>Hat eine besonders helle Röstung</li><li>Ist ideal für Vollautomaten geeignet</li></ul><h4>Produktbeschreibung</h4><p>Bei dem „Café Creme“ der Marke Gorilla handelt es sich um einen Kaffee, der speziell für Vollautomaten entwickelt wurde. Der Kaffee besteht zu 100 Prozent aus feinsten Arabica-Bohnen und weist deshalb einen geringeren Koffein-Gehalt auf als Mischungen mit Robusta-Anteil. Wie der Name schon verrät, ist der „Café Creme“ besonders sanft und cremig und ein wahrer Genuss. Die Bohnen werden auf traditionelle Weise in der Trommelröstmaschine bei niedriger Temperatur etwas leichter geröstet und bringen einen sehr harmonischen, milden, aber dennoch aromatischen Geschmack hervor. Der Kaffee lässt sich sowohl als milden Espresso, Latte Macchiato oder leckeren Cappuccino zubereiten und genießen. Gorilla Kaffees erhalten wir frisch geröstet von der Kaffeegrossrösterei A. Joerges.</p>', 'https://www.roastmarket.de/gorilla-cafe-creme-bohnen-1kg.html', 5),

-- Julius Meinl Kaffee
(6, 'Präsident Superbar Crema', '<h4>Kurzbeschreibung</h4><ul><li>Frisches und schokoladiges Aroma hochwertiger Arabica und Robustabohnen</li><li>Exotische Mischung aus Zentral- und Südamerika - in Wien geröstet</li><li>Mittel-dunkel in schonendem Rösterverfahren veredelt</li><li>Kräftig im Geschmack</li><li>Voller Körper mit leichter Fruchtsäure</li></ul><h4>Produktbeschreibung</h4><p>Österreichs beliebtester Kaffee ist mittel-dunkel geröstet und hat eine Spur von leichter, angenehmer Fruchtsäure. Julius Meinl hat als eines der angesehensten Kaffeehäuser Wiens mit dieser Mischung einen jahrelangen Bestseller kreiert. Ausgewählte Hochlandbohnen aus Zentral- und Südamerika geben diesem Kaffee einen kräftigen Geschmack und das unvergleichliche, ausgewogene Aroma. Die spezielle Röstung macht den Präsidenten zu einem besonderen Stück Wiener Kaffeekultur. Aus zentral- und südamerikanischen Kaffeespezialitäten zusammengestellt, wird dieser kraftvolle Kaffee für sein herrlich frisches Aroma und seinen vollen, komplexen Körper geschätzt. Lassen Sie sich bei einer warmen Tasse verführen und begeben Sie sich auf eine aufregende Geschmacksexpedition!</p>', 'https://www.roastmarket.de/julius-meinl-praesident-500g.html', 6),
(7, 'Premium Collection Espresso Arabica', '<h4>Kurzbeschreibung</h4><ul><li>Besteht zu 100% aus hochwertigen Arabicabohnen</li><li>Die Bohnen stammen aus Brasilien und Mittelamerika</li><li>Der Espresso zeichnet sich durch ein besonders starkes Aroma aus</li><li>Er hat einen süßlich-frischen Geschmack und eine feine Crema</li><li>Der Premium Kaffee ist UTZ-zertifiziert</li></ul><h4>Produktbeschreibung</h4><p>Der „Premium Espresso Arabica“ von Julius Meinl überzeugt durch seinen ausgewogenen Geschmack und besteht zu 100 Prozent aus sorgfältig ausgewählten, hochwertigen Arabica-Bohnen. Die Bohnen stammen aus Brasilien und Mittelamerika, wo sie unter optimalen Bedingungen reifen können. Sie verleihen diesem Espresso seinen frischen Geschmack und den zarten süßen Nachgeschmack. Auch die Crema überzeugt jeden Espressoliebhaber: Sie ist besonders samtig, weich und fein. Der Espresso schafft so ein wahrlich Wiener Geschmackserlebnis. Die Arabica-Bohnen dieses hochwertigen Premium Kaffees von Julius Meinl sind UTZ-zertifiziert.</p>', 'https://www.roastmarket.de/julius-meinl-premium-collection-espresso-utz-1kg.html', 7),
(8, 'Premium Collection Caffè Crema Selezione', '<h4>Kurzbeschreibung</h4><ul><li>Eine feine Mischung aus Arabica- und Robusta-Bohnen</li><li>Die Bohnen stammen aus Brasilien, Mittelamerika und Asien</li><li>Der „Caffè Crema“ hat ein intensives Aroma mit einer angenehmen Note von Haselnuss</li><li>Er überzeugt durch eine cremige und samtige Crema</li><li>Die Bohnenmischung ist UTZ-zertifiziert</li></ul><h4>Produktbeschreibung</h4><p>Diese Premiumröstung „Caffè Crema Selezione“ besteht aus hochwertigen Arabica-Bohnen, welche aus Brasilien und Mittelamerika stammen und aus feinsten Robusta-Bohnen asiatischer Herkunft. Der Kaffee, welcher zur „Premium Collection“ von Julius Meinl gehört, überzeugt durch ein besonders kräftiges Aroma mit einer angenehmen Note von Haselnuss. Besonders gut zur Geltung kommt diese Haselnuss-Nuance in Verbindung mit Milch. Das intensive Aroma wird durch eine faszinierende, besonders cremige und samtige Crema abgerundet, wodurch der Kaffee zu einem wahren Genuss wird. Der „Caffè Crema“ in Form von ganzen Bohnen ist besonders gut für Vollautomaten geeignet. Die Bohnen dieser feinen Mischung sind UTZ-zertifiziert.</p>', 'https://www.roastmarket.de/julius-meinl-premium-collection-caffe-crema-utz-1kg.html', 8),
(9, 'Wiener Melange', '<h4>Kurzbeschreibung</h4><ul><li>100% Arabica-Bohnen für Wiener Melange</li><li>Perfekt ausbalancierte Noten von wild-würzig bis fein und süß</li><li>Dunkler Röstgrad</li><li>Subtiles Säurespiel</li><li>Voller Körper</li></ul><h4>Produktbeschreibung</h4><p>Wie der Name schon sagt (mélange ist französisch für „Mischung“), kann man hier ein sorgsam kuratiertes Zusammentreffen mehrerer feinster Arabica-Bohnen erwarten, die einen perfekt ausbalancierten Mix aus wilden und würzigen sowie süßen Noten ergeben. Der Röstgrad fällt eher dunkel aus, trotzdem lässt sich ein angenehmes, jedoch sehr dezentes Säurespiel erschmecken. Der Körper ist voll, das Aroma intensiv und anregend. Die ideale Zubereitungsart ist natürlich mit Milch oder pflanzlicher Alternative als Wiener Melange. Der Lieferumfang beinhaltet 250g ganze Bohnen. Julius Meinl galt seinerzeit als erster professioneller Kaffeeröster Europas und legte 1862 den Grundstein für die erfolgreiche Geschichte des nach ihm benannten Kaffeeunternehmens.&nbsp;Holen Sie sich mit der Wiener Melange aus der Vienna Collection die Wiener Kaffeehauskultur zu Ihnen nach Hause.</p>', 'https://www.roastmarket.de/julius-meinl-wiener-melange-250g.html', 9),
(10, 'Wiener Mokka', '<h4>Kurzbeschreibung</h4><ul><li>100% Arabica-Bohnen als Wiener Espressoröstung</li><li>Schoko- und Haselnussnoten bestimmen den Geschmack</li><li>Die Bohnen stammen aus Cerrado in Zentralbrasilien</li><li>Dunkle und kräftige Wiener Espressoröstung mit wenig Säure</li><li>Haselnussfarbene Cremazeichnung</li></ul><h4>Produktbeschreibung</h4><p>Der Wiener Mokka ist ein reiner Arabicakaffee, dessen Bohnen aus Cerrado in Zentralbrasilien stammen und mit einer original Wiener Espressoröstung veredelt wurden. Das Röstprofil ist dabei sehr dunkel, was dem Kaffee viel Säure entzieht und ihn kräftig und herzhaft werden lässt. Geschmacklich stechen Kakao und Haselnussnoten hervor. Die Cremazeichnung ist dicht und beständig. Ein wunderbarer Kaffee für Mokka- und jegliche Espressozubereitungen. Auch als Basisespresso für Kreationen mit geschäumter Milch. Der Lieferumfang beinhaltet 250g ganze Bohnen. Der Österreicher Julius Meinl galt seinerzeit als erster professioneller Kaffeeröster Europas und legte 1862 den Grundstein für die erfolgreiche Geschichte des nach ihm benannten Kaffeeunternehmens.&nbsp;Holen Sie sich mit dem Wiener Mokka aus der Vienna Collection die Wiener Kaffeehauskultur zu Ihnen nach Hause.</p>', 'https://www.roastmarket.de/julius-meinl-wiener-mokka-250g.html', 10),
(11, 'Wiener Espresso', '<h4>Kurzbeschreibung</h4><ul><li>Charaktervoller Wiener Espresso mit 100% Arabicabohnen</li><li>Mild-würzig mit fruchtigen Nuancen</li><li>Mittelkräftige Röstung</li><li>Angenehmes Säurespiel</li><li>Ideal für den Vollautomaten, aber auch spannend als Filterzubereitung</li></ul><h4>Produktbeschreibung</h4><p>Wer nach dem klassischen, charaktervollen Wiener Espresso sucht, wird hier fündig. Die Arabica-Bohnen wurden sorgsam mit einem mittelkräftigen Röstprofil veredelt, um ihre Aromen und Säuren sorgsam herauszuarbeiten. Das Ergebnis ist ein mild-würziger Espresso mit leicht fruchtigen Anklängen und einem angenehmen Säurespiel. Er schmeckt hervorragend aus dem Vollautomaten, aber auch als Filterkaffee oder aus der French Press lässt sich damit ein Genussmoment nach Wiener Art schaffen. Der Lieferumfang beinhaltet 250g ganze Bohnen. Der Österreicher Julius Meinl galt seinerzeit als erster professioneller Kaffeeröster Europas und legte 1862 den Grundstein für die erfolgreiche Geschichte des nach ihm benannten Kaffeeunternehmens.&nbsp;Holen Sie sich mit dem Wiener Espresso aus der Vienna Collection die Wiener Kaffeehauskultur zu Ihnen nach Hause.</p>', 'https://www.roastmarket.de/julius-meinl-wiener-espresso-250g.html', 11),

-- Hausbrandt Kaffee
(12, 'Moka gemahlen', '<h4>Kurzbeschreibung</h4><ul><li>Gemahlene Bohnen - 100 % Arabica-Bohnen</li><li>Milde Röstung mit mildem Aroma, kaum wahrnehmbarer Säure und Noten von Karamell und Nuss</li><li>Bei gleichmäßigen Temperaturen langsam geröstet</li><li>Perfekt für Espressokocher geeignet</li><li>In der edlen 250g Dose</li></ul><h4>Produktbeschreibung</h4><p>Eine besondere Mischung mit milden Eigenschaften ist der Hausbrandt Moka aus der italienischen Rösterei. Hierfür werden die besten Arabica-Bohnen verwendet und zu einer milden Röstung vollendet. Durch das milde Aroma und den leichten Körper wirkt er beflügelnd, perfekt für mehr als eine Tasse. Auch die kaum wahrnehmbare Säure schmeichelt dem Gaumen. Der Geschmack wird durch Noten von Karamell und Nuss abgerundet. Mit der typischen langsamen Röstung bei gleichmäßigen Temperaturen wird hier das Beste aus den Bohnen geholt und hinterlässt einen einzigartigen Genussmoment. Dank des speziellen Mahlverfahrens ist sie ideal für die Zubereitung mit dem Espressokocher geeignet. Mit ihr gelingen großartige Espresso-, Kaffee- und Cappuccino-Kreationen. Die gemahlenen Bohnen werden in einer edlen 250-g-Dose verpackt. Die Traditionsrösterei Hausbrandt, mit Sitz in Triest, kreiert seit über 100 Jahren Kaffeemischungen, die von Kaffeeliebhabern auf der ganzen Welt geschätzt werden.</p>', 'https://www.roastmarket.de/hausbrandt-moka-gemahlen-250g-dose.html', 12),
(13, 'Gourmet gemahlen', '<h4>Kurzbeschreibung</h4><ul><li>100 % feinste Arabica-Bohnen</li><li>Geschmackliche Kombination aus Bitter-Kakao und Süßwurzeln</li><li>Die Bohnen stammen aus Kolumbien</li><li>Der Kaffee ist durch eine dezente Säure sehr harmonisch</li><li>Überzeugt durch einen ausgewogenen Geschmack</li></ul><h4>Produktbeschreibung</h4><p>Der „Gourmet“-Kaffee von Hausbrandt ist sowohl als Kaffee oder als köstlicher Espresso die perfekte Wahl für Genießer. Bei diesem Kaffee handelt es sich um eine 100 % Arabica-Mischung aus den besten Kaffeebohnen aus Kolumbien, Guatemala, El-Salvador und Brasilien. Zusammen ergeben sie einen sehr ausgewogenen, würzigen sowie leicht fruchtigen Geschmack und verzaubern vom ersten Schluck an. Von Hand gepflückt, werden die Bohnen nass aufbereitet und anschließend bei niedrigen Temperaturen schonend mittelhell geröstet. Dadurch entwickelt der „Gourmet“-Kaffee sein volles Aroma und ist dabei sehr säurearm. Er eignet sich perfekt für die Zubereitung sowohl im Vollautomaten als auch im Siebträger. In unserem Shop ist die „Gourmet“-Mischung ebenfalls in der 1 kg Variante erhältlich.</p>', 'https://www.roastmarket.de/hausbrandt-gourmet-gemahlen-250g-dose.html', 13),
(14, 'Espresso gemahlen', '<h4>Kurzbeschreibung</h4><ul><li>Gemahlene Bohnen - 100 % Arabica-Bohnen</li><li>Ausgewogene Röstung mit weichem Körper, kaum wahrnehmbarer Säure und blumigen Aromen</li><li>Bei gleichmäßigen Temperaturen langsam geröstet</li><li>Perfekt für Espressokocher geeignet</li><li>In der edlen 250-g-Dose</li></ul><h4>Produktbeschreibung</h4><p>Der Hausbrandt Espresso aus der italienischen Rösterei ist eine Mischung ausgewählter Kaffeesorten und 100 % Arabica. Die ausgewogene Röstung wirkt durch den weichen Körper besonders mild. Die kaum wahrnehmbare Säure lässt sie zudem edel wirken und schmeichelt dem Gaumen. Abgerundet wird die Mischung durch ihr blumiges Aroma und den angenehmen Nachgeschmack. Mit der typischen langsamen Röstung bei gleichmäßigen Temperaturen wird hier das Beste aus den Bohnen geholt und hinterlässt einen einzigartigen Genussmoment. Dank des speziellen Mahlverfahrens ist sie ideal für die Zubereitung mit dem Espressokocher geeignet. Mit ihr gelingen großartige Espresso-, Kaffee- und Cappuccino-Kreationen. Die gemahlenen Bohnen werden in einer edlen 250-g-Dose verpackt. Die Traditionsrösterei Hausbrandt, mit Sitz in Triest, kreiert seit über 100 Jahren Kaffeemischungen, die von Kaffeeliebhabern auf der ganzen Welt geschätzt werden.</p>', 'https://www.roastmarket.de/hausbrandt-espresso-gemahlen-250g-dose.html', 14),
(15, 'Espresso Trieste', '<h4>Kurzbeschreibung</h4><ul><li>Ganze Bohnen - 70 % Arabica-Bohnen und 30 % Robusta-Bohnen</li><li>Ausgewogene Röstung mit reichem Körper, großartigen Röstaromen und Noten von Bitterkakao und Lakritze</li><li>Bei gleichmäßigen Temperaturen langsam geröstet</li><li>Perfekt für Espressokocher, Siebträger und Vollautomat geeignet</li><li>Im edlen 1-kg-Beutel</li></ul><h4>Produktbeschreibung</h4><p>Der Espresso Trieste erinnert an die Anfänge der italienischen Rösterei Hausbrandt im Jahre 1892. Die Mischung aus 70 % Arabica-Bohnen und 30 % Robusta-Bohnen bietet eine ausgewogene Röstung und verleiht dem reichen Körper großartige Röstaromen. Durch die kaum wahrnehmbare Säure wirkt die Mischung mild und edel. Der Nachgeschmack erinnert an Noten von Bitterkakao und Lakritze. Mit der typischen langsamen Röstung bei gleichmäßigen Temperaturen wird hier das Beste aus den Bohnen geholt und hinterlässt einen einzigartigen Genussmoment. Sie ist mit einem Espressokocher, Siebträger oder Vollautomaten ideal zuzubereiten. Mit ihr gelingen großartige Espresso-, und Cappuccino-Kreationen. Die ganzen Bohnen werden in einem edlen 1-kg-Beutel verpackt. Die Traditionsrösterei Hausbrandt, mit Sitz in Triest, kreiert seit über 100 Jahren Kaffeemischungen, die von Kaffeeliebhabern auf der ganzen Welt geschätzt werden.</p>', 'https://www.roastmarket.de/hausbrandt-espresso-trieste-bohnen-1kg.html', 15),
(16, 'Decaffeinato ', '<h3>Kurzbeschreibung</h3><ul><li>Überzeugt durch eine Nuance von Trockenfrüchten und Schokoladen-Aroma</li><li>Weist einen ausgewogenen milden Geschmack auf</li><li>Der Kaffee ist harmonisch durch eine dezente Säure</li><li>Der Kaffee wurde schonend entkoffeiniert</li></ul><h4>Produktbeschreibung</h4><p>Der Kaffee „Decaffeinato“ der Marke Hausbrandt besteht zu 100 % aus erlesenen Arabica-Bohnen. Die leichte Röstung der Bohnen zeichnet sich durch einen weichen ausgewogenen Geschmack aus. Durch ein äußerst schonendes Entkoffeinierungsverfahren bleibt das feine Kaffeearoma erhalten. Begleitet wird das sanfte Geschmackserlebnis durch die angenehme Nuance von Trockenfrüchten. Durch Schokoladen-Aromen wird der entkoffeinierte Kaffee perfekt abgerundet. Das feine Aroma weist eine dezente Säure auf und ist besonders sanft und mild. Der „Decaffeinato“ ist besonders gut für Siebträger und Vollautomaten geeignet. Die italienische Kaffeerösterei Hausbrandt wurde im Jahre 1892 in Triest in Italien gegründet und überzeugt seitdem durch hohen Kaffee-Genuss.</p>', 'https://www.roastmarket.de/hausbrandt-decaffeinato-bohnen-1kg.html', 16),
(17, 'Super Bar', '<h4>Kurzbeschreibung</h4><ul><li>Neues Design - das Produktbild kann abweichen</li><li>Ganze Bohnen - 90 % Arabica-Bohnen und 10 % Robusta-Bohnen aus sechs verschiedenen Varietäten</li><li>Kräftige Röstung mit vollem intensivem Körper, einer kaum wahrnehmbaren Säure und Noten von Bitterkakao und Lakritze</li><li>Bei gleichmäßigen Temperaturen langsam geröstet</li><li>Perfekt für Siebträger und Vollautomat geeignet</li><li>Im edlen 500g- oder 1kg-Beutel</li></ul><h4>Produktbeschreibung</h4><p>Das Besondere an dem Hausbrandt Super Bar der italienischen Rösterei Hausbrandt ist die Mischung aus sechs verschieden kraftvollen Bohnenvarietäten mit einem Anteil von 90 % Arabica-Bohnen und 10 % Robusta-Bohnen. Die kräftige Röstung verleiht der Mischung einen vollen und intensiven Körper, die kaum wahrnehmbare Säure macht ihn dabei besonders edel. Im Nachgeschmack beflügelt sie den Gaumen mit Noten von Bitterkakao und Lakritze. Mit der typischen langsamen Röstung bei gleichmäßigen Temperaturen wird hier das Beste aus den Bohnen geholt und hinterlässt einen einzigartigen Genussmoment. Sie ist mit einem Siebträger oder Vollautomaten ideal zuzubereiten. Mit ihr gelingen großartige Espresso-, und Cappuccino-Kreationen. Die ganzen Bohnen werden in einem edlen 500g oder 1-kg-Beutel verpackt. Die Traditionsrösterei Hausbrandt, mit Sitz in Triest, kreiert seit über 100 Jahren Kaffeemischungen, die von Kaffeeliebhabern auf der ganzen Welt geschätzt werden.</p>', 'https://www.roastmarket.de/hausbrandt-super-bar.html', 17),
(18, 'Espresso Nonnetti', '<h4>Kurzbeschreibung</h4><ul><li>Ganze Bohnen - 80% aus Arabicabohnen und 20% aus Robustabohnen</li><li>Feine Nuancen von Brot und Keksen</li><li>Schonende Röstung</li><li>Perfekt für Vollautomaten und Siebträger geeignet</li><li>In der 500g- oder 1kg-Packung erhältlich</li></ul><h4>Produktbeschreibung</h4><p>Der Hausbrandt Espresso Nonnetti ist der Klassiker aus deren Hause mit einer edlen Mischung aus 80 Prozent Arabica- und 20 Prozent Robustabohnen. Die Bohnen werden schonend und mittelstark geröstet, wodurch ihnen ein aromatischer, schokoladig-malziger Duft verliehen wird. Bohnenauswahl, handwerkliches Können und Leidenschaft für Kaffee fügen sich in diesem Espresso zusammen und vereinen sich in einem unvergleichlichen Geschmacksprofil. Das Ergebnis ist ein körperreicher und säurearmer Espresso mit feinen Nuancen von Brot und Keksen und einer feinen, fast sahnigen Crema. Der Hausbrandt Espresso gelingt sowohl bei der Zubereitung mit der Siebträgermaschine als auch mit dem Vollautomaten perfekt. Er eignet sich zudem für einen klassischen Espresso und für Kaffeespezialitäten wie Cappuccino oder Latte Macchiato. Hausbrandt, mit Sitz in Triest, kreiert seit über 100 Jahren Kaffeemischungen, die von Kaffeeliebhabern auf der ganzen Welt geschätzt werden.</p>', 'https://www.roastmarket.de/hausbrandt-espresso-nonnetti.html', 18),
(19, 'Oro Casa ', '<h4>Kurzbeschreibung</h4><ul><li>500g leckere Arabica-Robusta-Mischung aus ganzen Kaffeebohnen</li><li>Bestehend aus 50% edelsten Arabica- und 50% feinsten Robusta-Bohnen</li><li>Handgepflückte Kaffeebohnen aus Kolumbien, Guatemala, El Salvador und Brasilien</li><li>Besticht durch fruchtige Süße und langanhaltend vollmundigen Nachgeschmack</li><li>Für Vollautomaten und jegliche Kaffeekreationen geeignet</li></ul><h4>Produktbeschreibung</h4><p>Diese edle Mischung ist für viele Kaffeeliebhaber goldrichtig. Der „Oro Casa“ ist eine der traditionsreichsten Mischungen der renommierten Marke Hausbrandt und überzeugt durch den vollen Körper ihrer Bohnen aus Kolumbien, Guatemala, El Salvador und Brasilien. Aus den edlen Arabicas (50%) sowie aus den feinsten Robusta-Bohnen (50%), die ausschließlich handgepflückt, nass aufbereitet und anschließend in der Sonne getrocknet sind, entfaltet sich dank des schonenden Röstverfahrens der italienischen Top-Marke ein intensives Röstaroma mit umwerfenden Schokoladennoten. Der „Oro Casa“ ist ein Klassiker unter den Kaffeekreationen und besticht durch seine fruchtige Süße, bei gleichzeitig lang anhaltender Vollmundigkeit. Hausbrandt steht für beste Produkte aus ausgewählten Herkunftsländern bei hoher und gleichbleibender Qualität.</p>', 'https://www.roastmarket.de/hausbrandt-oro-casa-500g.html', 19),

-- Speicherstadt Kaffee
(20, 'Ebbe & Flut Kaffeemischung', '<h4>Kurzbeschreibung</h4><ul><li>100% biologische Arabica Bohnen</li><li>Bio-zertifizierte Bohnen aus Äthiopien, Mexiko, Papua-Neuguinea, röstfrisch aus Hamburg</li><li>Hauptnote Jasminblüte und Bergamotte, Nebennote Pampelmuse und rote Johannisbeere</li><li>Nuance von Schwarztee im Abgang</li><li>Hervorragend für alle Kaffee-Zubereitungsarten geeignet, da der Mahlgrad gewählt werden kann</li></ul><h4>Produktbeschreibung</h4><p>Die Ebbe &amp; Flut Kaffeemischung von Speicherstadt ist ein 100% biologischer Spitzenkaffee und verspricht mit einem absoluten Arabica Bohnen Anteil ein intensives Geschmackserlebnis. Er ist charakteristisch für seinen Geschmack nach Jasminblüte und Bergamotte mit einer Note von Pampelmuse und roter Johannisbeere. Im Abgang können Nuancen von Schwarztee gekostet werden. Die Ebbe &amp; Flut Bio Mischung ist ein besonders aromatischer Kaffee und zeugt von einer mittleren Intensität. Die Bohnen dieser Sorte stammen aus den Ländern Äthiopien, Mexiko und Papua-Neuguinea und werden biologisch angebaut. Geröstet werden sie letztendlich in der Rösterei von Speicherstadt, in Hamburg. Dank eines besonders schonenden Trommelröstverfahrens, ist es Speicherstadt möglich den vollmundigen und natürlichen Geschmack der Bohnen zu erhalten und somit ein einzigartiges Genusserlebnis zu garantieren.</p>', 'https://www.roastmarket.de/speicherstadt-ebbe-flut-kaffeemischung-bohnen.html', 20),
(21, 'Kolumbien Entkoffeiniert 100% Arabica', '<h4>Kurzbeschreibung</h4><ul><li>100% hochwertige Arabicabohnen aus Antioquia, Kolumbien</li><li>Besonders aromaschonend entkoffeiniert</li><li>Das fruchtige Aroma und der erlesene Geschmack zeichnen diese Röstung aus</li><li>Hervorragend für alle Espresso-Zubereitungsarten geeignet, da ein Mahlgrad gewählt werden kann</li></ul><h4>Produktbeschreibung</h4><p>Der Kolumbien Entkoffeiniert von Speicherstadt besteht zu 100% aus Arabicabohnen. Die Espresso-Bohnen stammen aus den besten Hochlandanbaugebieten in Antioquia, Kolumbien. Die Bohnen werden schonend und chemiefrei mit dem CO2-Verfahren durch Wasserdampf und Druck entkoffeiniert. Durch die besonders schonende Entkoffeinierung bleibt das volle Aroma erhalten. Die mittlere Röstung dieses Espressos erzeugt einen genussvollen Geschmack von Pampelmuse mit leichten Noten von weißer Traube und grünen Apfel. Die Speicherstadt Kaffeerösterei im Herzen von Hamburg röstet erstklassige Kaffeebohnen täglich frisch von Hand. Diese Spezialitätenrösterei stellt durch den direkten Handel mit den Kaffeebauern soziale Nachhaltigkeit in den Mittelpunkt.</p>', 'https://www.roastmarket.de/speicherstadt-kolumbien-entkoffeiniert-bohnen.html', 21),
(22, 'Kolumbien Entkoffeiniert Kaffee', '<h4>Kurzbeschreibung</h4><ul><li>100% edle Arabica Bohnen aus Antioquia, Kolumbien</li><li>Hauptnote Pfirsich und Süßkirsche, Nebennote grüner Apfel</li><li>Frisch im Abgang mit einem Hauch von Limette</li><li>Aromaschonendes Entkoffeinierungsverfahren</li></ul><h4>Produktbeschreibung</h4><p>Der Kolumbien Entkoffeiniert von Speicherstadt verspricht mit einem 100 prozentigem Arabica Bohnen Anteil ein intensives Geschmackserlebnis. So ist er charakteristisch für seinen Geschmack nach Pfirsich und Süßkirsche mit einer Note von grünem Apfel. Im Abgang können Nuancen an Limette gekostet werden. Der Kolumbien Entkoffeiniert ist ein besonders aromatischer Kaffee und zeugt von einem sehr niedrigen Säuregehalt. Die Bohnen der Speicherstadt Sorte stammen aus Kolumbien werden mittels des CO2-Verfahrens entkoffeiniert. Geröstet werden sie letztendlich in der Rösterei von Speicherstadt, in Hamburg. Dank eines besonders schonenden Trommelröstverfahrens, ist es Speicherstadt möglich den vollmundigen und natürlichen Geschmack der Bohnen zu erhalten und somit ein einzigartiges Genusserlebnis zu garantieren.</p>', 'https://www.roastmarket.de/speicherstadt-kolumbien-bohnen-entkoffeiniert.html', 22),
(23, 'Äthiopien Dimtu Tero Farm Bio', '<h4>Kurzbeschreibung</h4><ul><li>Sortenreiner Bio Single Origin Spitzenarbica der Varietät „Äthiopischer Heirloom“</li><li>Frisches und saftiges Geschmacksprofil mit Noten von Zitronengras, Salbei und Honigmelone und der Süße von braunem Zucker</li><li>Hochlandarabicas (1800 – 2100m) von der Dimtu Tero Farm aus der Guji Zone in Äthiopien</li><li>Komplexes, aber angenehmes Säurespiel</li><li>Speicherstadt gewährleistet direkten und fairen Handel mit den Kaffeeerzeugern</li></ul><h4>Produktbeschreibung</h4><p>Dieser sortenreine Single Origin Spitzenkaffee besteht zu 100% aus Hochlandarabicas der Sorte „Äthiopischer Heirloom“, die von der Dimtu Tero Farm in der Guji Zone in Äthiopien stammen, wo die Bohnen zwischen 1800 und 2100 Metern nach kontrolliert biologischen Kriterien angebaut und anschließend gewaschen aufbereitet werden. In Verbindung mit dem perfekt abgestimmten Röstprofil von Speicherstadt entsteht ein frischer Kaffee, der nach Zitronengras und etwas Salbei duftet. Geschmacklich sticht fruchtige Honigmelone hervor, während der Abgang von der Süße von braunem Zucker bestimmt wird. Das Mundgefühl ist saftig, das Säurespiel komplex, aber angenehm. Das beste Ergebnis wird im Vollautomaten erzielt. Der Lieferumfang beinhaltet 250g ganze Bohnen. Die Spezialitätenrösterei Speicherstadt aus Hamburg stellt durch den direkten Kontakt zu den Kaffeeerzeugern ökologische und soziale Nachhaltigkeit sowie die bestmögliche Qualität in den Mittelpunkt Ihres Wirkens als moderne Rösterei.</p>', 'https://www.roastmarket.de/speicherstadt-aethiopien-dimtu-tero-farm-bio.html', 23),
(24, 'Brasilien Doce Diamantina', '<h4>Kurzbeschreibung</h4><ul><li>100% feinste Arabicabohnen aus Brasilien</li><li>Besonders sind die milden dunkler Toast und Erdnuss Noten</li><li>Durch eine schonende Röstung besonders säurearm</li><li>Koffeinarm und trotzdem sehr aromatisch</li><li>Hervorragend für alle Kaffeezubereitungsarten geeignet, da ein Mahlgrad gewählt werden kann</li></ul><h4>Produktbeschreibung</h4><p>Der Brasilien Doce Diamantina von Speicherstadt besteht aus 100% Arabicabohnen, welche aus Brasilien stammen. Er ist säure- und koffeinarm und somit besonders sanft. Durch die schonende Röstung wird ein Verlust des Aromas vermieden. Der Brasilien Doce Diamantina überzeugt durch seine milden Noten von Erdnuss und dunklem Toast, die den Kaffee zu einem süßlichen Genuss machen. Diese Kaffeemischung hat zudem eine angenehme Säure. Dank eines besonders schonenden Trommelröstverfahrens, ist es der Rösterei Speicherstadt möglich den vollmundigen und natürlichen Geschmack der Arabicabohnen zu erhalten und somit ein einzigartiges Genusserlebnis zu garantieren. Speicherstadt Kaffees sind jetzt auch frisch gemahlen erhältlich!</p>', 'https://www.roastmarket.de/speicherstadt-brasilien-doce-diamantina-bohnen.html', 24),
(25, 'Caffè Crema', '<h4>Kurzbeschreibung</h4><ul><li>Köstlicher Caffè Crema exklusiv für <strong>roast</strong>market kreiert</li><li>Mit genussvollen Noten von Bitterschokolade, gerösteten Nüssen und dunklem Toast</li><li>Der Geschmack wird von der sehr geringen Säure und einer vollen Intensität perfekt abgerundet</li><li>Aus 50% Arabica- und 50% Robustabohnen aus biologischem Anbau</li><li>Speziell für Zubereitung in Vollautomaten abgestimmt, jedoch für alle Zubereitungsmöglichkeiten geeignet</li></ul><h4>Produktbeschreibung</h4><p>Der Speicherstadt Caffè Crema ist eine für <strong>roast</strong>market exklusiv kreierte Bio Kaffeemischung. Verlockende Geschmäcker von Bitterschokolade, gerösteten Nüssen und dunklem Toast machen aus dieser Speicherstadt Sorte ein absolutes Geschmackserlebnis für den Gaumen. Der Kaffeegenuss wird von einer sehr geringen Säure und vollen Intensität perfekt abgerundet. Der ausgezeichnete Geschmack entsteht dank der optimal ausgewählten Mischung von 50% Arabica- und 50% Robustabohnen aus biologischem Anbau, die diesen einzigartigen Caffè Crema zusammensetzt. Die hochwertigen Kaffeebohnen wurden von der Speicherstadt Kaffeerösterei in der Hansestadt Hamburg sorgfältig im Trommelröstverfahren gleichmäßig und optimal geröstet. Diese Spezialitätenrösterei stellt durch den direkten Kontakt zu den Kaffee-Erzeugern ökologische- und soziale Nachhaltigkeit in den Mittelpunkt.</p>', 'https://www.roastmarket.de/speicherstadt-caffe-crema.html', 25),
(26, 'Orang Utan Espresso', '<h4>Kurzbeschreibung</h4><ul><li>100% Arabica-Bohnen</li><li>Sehr dunkle Espressoröstung mit ausgewogenem Aroma und einem fruchtig-nussigem Schokoladengeschmack</li><li>Mit feinsten Bohnen von der Insel Sumatra in Indonesien</li><li>Wir empfehlen die Zubereitung im Espressokocher, Siebträger oder Vollautomaten</li><li>Aus der bekannten Hamburger Spezialitätenrösterei Speicherstadt</li></ul><h4>Produktbeschreibung</h4><p>Die Kreation Speicherstadt Orang Utan Espresso ist eine einzigartige Arabica-Mischung, die mit einer sehr dunklen Espressoröstung und dem ausgewogenem Aroma begeistert. Geschmacklich lassen sich fruchtig-nussige Noten und ein angenehmer Schokoladengeschmack erkennen. Auf den Plantagen der Insel Sumatra in Indonesien werden die Bohnen unter idealen Bedingungen auf 900 bis 2400 Metern angebaut. Der Orang Utan Espresso lässt den vollen Geschmack bei der Zubereitung im Espressokocher, Siebträger oder im Vollautomaten entfalten. Wahlweise werden die ganzen oder gemahlenen Bohnen im wiederverschließbaren 250g-Beutel verpackt und bis nach Hause geliefert. Die Rösterei des Jahres 2014 ist unter Kennern längst ein Begriff. So zählt die Spezialitätenrösterei Speicherstadt im Herzen Hamburgs mittlerweile zu den besten Kaffeeröstereien Deutschlands. Zudem fördert das Orang-Utan-Kaffee Projekt eine ökologische Bewirtschaftung und den Verzicht auf die Rodung des Regenwaldes.</p>', 'https://www.roastmarket.de/speicherstadt-orang-utan-espresso-bohnen.html', 26),
(27, 'Orang Utan Kaffee', '<h4>Kurzbeschreibung</h4><ul><li>100% feinste Arabicabohnen aus Sumatra, Indonesien</li><li>Außergewöhnlich harmonisch und von mittlerer Stärke</li><li>Besonders sind seine feine Fruchtsüße und zarte Pekannuss-Aromen</li><li>Hervorragend für alle Kaffeezubereitungsarten geeignet, da ein Mahlgrad gewählt werden kann</li></ul><h4>Produktbeschreibung</h4><p>Diese einzigartige Kaffeespezialität stammt von Plantagen entlang des tropischen Regenwaldes der Insel Sumatra. Dort werden die Plantagen, die auf einer Höhe zwischen 1.050 und 1350 Metern Höhe liegen, von Kleinbauern bewirtschaftet. Der Orang Utan ist ein außergewöhnlich harmonischer Kaffee von mittlerer Stärke. Der zarte Pekannuss-Geschmack wird durch eine feine fruchtige Note von Pflaume und Gurke untermalt. Dadurch verspricht dieser Kaffee, der sowohl schwarz als auch mit Milchschaum getrunken werden kann, einen vollendeten einzigartigen Kaffeegenuss. Im Abgang ist der Orang Utan Kaffee cremig und leicht süßlich. Die Speicherstadt Kaffeerösterei im Herzen von Hamburg röstet erstklassige Kaffeebohnen täglich frisch von Hand. Diese Spezialitätenrösterei stellt durch den direkten Handel mit den Kaffeebauern soziale Nachhaltigkeit in den Mittelpunkt.</p>', 'https://www.roastmarket.de/speicherstadt-orang-utan-bohnen.html', 27),

-- Caimano Kaffee
(28, 'Espresso Classico', '<h4>Kurzbeschreibung</h4><ul><li>Mischung aus 60% feinster Arabica- und 40% Robustabohnen aus Süd- und Mittelamerika</li><li>Vollmundiger, nussig-holziger Geschmack</li><li>Überzeugt durch seine sahnige und feine Crema</li><li>Ideal für Vollautomaten und Siebträger geeignet</li></ul><h4>Produktbeschreibung</h4><p>Der Espresso Classico von Caffè Caimano besteht aus einer Mischung hochwertiger Arabica- und Robustabohnen und eignet sich am besten für die Zubereitung eines vollmundigen Espressos ganz nach italienischer Art im Siebträger sowie im Kaffeevollautomaten. Die Bohnen werden sortenrein geröstet, um jeder Sorte die individuell bestmögliche Röstung zukommen zu lassen. Das beeindruckende Ergebnis mit kräftigem Körper schmeckt herrlich schokoladig und wird von nussigen Nebennoten hervorragend ergänzt. Dank seiner Intensität und ausgesprochenen Cremigkeit eignet sich der Espresso Classico zudem ideal als Cappuccino.&nbsp;</p>', 'https://www.roastmarket.de/caffe-caimano-espresso-classico.html', 28),
(29, 'Caffè Crema', '<h4>Kurzbeschreibung</h4><ul><li>Mischung aus 100% feinster Arabicabohnen</li><li>Geschmacksnoten von Trockenfrüchten</li><li>Geröstet im schonenden Trommelröstverfahren</li><li>Ideal für Vollautomaten und Siebträger sowie Filterkaffee geeignet</li></ul><h4>Produktbeschreibung</h4><p>Der Caimano Caffè Crema von Caimano besteht aus einer Mischung von 100% edlen Arabicabohnen und eignet sich hervorragend für die Zubereitung eines vollmundig-harmonischen Kaffees. Dank der schonenden Trommelröstung entsteht eine außergewöhnlich veredelte Röstung mit blumigen Geschmacksnoten von Trockenfrüchten für einen besonders harmonisches Geschmacksprofil. Mit seinem leichten, runden Körper und dem milden Säuregrad schmeckt dieser Kaffee vor allem Liebhabern von feinen Aromen besonders gut. Der Caffè Crema eignet sich nicht nur für die klassisch italienische Zubereitungsart im Siebträger, sondern überzeugt auch als cremiger Genuss aus dem Kaffeevollautomaten oder gar als Filterkaffee.</p>', 'https://www.roastmarket.de/caffe-caimano-caffe-crema.html', 29),
(30, 'Espresso Forte', '<h4>Kurzbeschreibung</h4><ul><li>Edle Mischung aus 100% Robustabohnen</li><li>Aromatischer Geschmack erinnert an Bitterschokolade und Honig</li><li>Überzeugt durch seinen voluminösen Körper und seine samtweiche Crema</li><li>Ideal für Vollautomaten und Siebträger geeignet</li></ul><h4>Produktbeschreibung</h4><p>Der Espresso Forte von Caimano ist eine außergewöhnlich edle Mischung von 100% Robustabohnen. Veredelt werden die Rohbohnen durch eine besonders schonende, sortenreine Trommelröstung. Aromatisch beeindruckt die Röstung mit feinen Noten von Bitterschokolade und Anklängen von Honig. Mit dem Espresso Forte von Caimano genießen Sie eine kompromisslose und intensive Mischung, die einen ausgesprochen voluminösen Körper mit samtweicher Crema entwickelt und dabei nur sehr dezente Säurenoten aufweist. Der Espresso eignet sich hervorragend sowohl für die Zubereitung in Siebträgermaschinen wie auch für Ihren Kaffeevollautomaten.</p>', 'https://www.roastmarket.de/caffe-caimano-espresso-forte.html', 30),

-- Lucaffee Kaffee
(31, 'Blucaffé ', '<h4>Kurzbeschreibung</h4><ul><li>Besteht zu 90% aus Arabica- und zu 10% aus Robustabohnen</li><li>Besteht aus hochwertigen Jamaica-Blue-Mountain-Kaffeebohnen</li><li>Überzeugt durch eine leichte Süße mit würzigem Geschmack</li><li>Weiches Aroma mit Schokoladennote</li><li>Schonend in der Drehtrommel geröstet</li></ul><h4>Produktbeschreibung</h4><p>Diese Premiumröstung besteht zu 90% aus Arabica- und zu 10% aus hochwertigen Robustabohnen aus tropischen Gebieten in Hochlagen. Der „Blucaffé“ der Marke Lucaffé überzeugt durch ein leicht süßes Aroma mit einer feinen Nuance. Dabei beinhaltet er hochwertige Jamaica-Blue-Mountain-Kaffeebohnen - eine der teuersten Kaffeevarietäten der Welt.&nbsp;Das weiche Aroma wird durch die charakteristische Schokoladennote abgerundet. Alle Lucaffé Kaffeesorten werden langsam und schonend in der Drehtrommel geröstet. Durch das typisch italienische Röstverfahren können sich die ausgewählten Aromen perfekt entfalten. Die harten Bitterstoffe werden dem Kaffee durch die schonende Röstung entzogen, was den Kaffee sehr weich und cremig macht. Der Kaffee kommt in einer schönen blau-schillernden Verpackung und ist sowohl für die Zubereitung in Siebträgermaschinen, im Vollautomaten als auch in Espressokochern geeignet.</p>', 'https://www.roastmarket.de/lucaffe-blucaffe-bohnen-700g.html', 31),
(32, 'Mamma Lucia', '<h4>Kurzbeschreibung</h4><ul><li>Espresso Röstung aus 40% Arabicabohnen und 60% Robustabohnen aus Indien, Mittel- und Südamerika</li><li>Speziell für den Gastronomiebereich entwickelt</li><li>Besonders sind Schokoladennote und eine tolle Crema</li><li>Sehr weich in Säure und cremig durch eine sanfte Röstung</li><li>Hervorragend für Espressokocher Vollautomaten und Siebträger geeignet</li></ul><h4>Produktbeschreibung</h4><p>Der Lucaffé Mamma Lucia ist eine angenehme 40/60 Arabica-Robusta-Mischung mit Gelinggarantie. Die optimisierte Mischung ist sehr gut ausbalanciert und besticht durch eine tolle Crema. Der, speziell für den Gastronomiebereich entwickelte Kaffee, ist qualitativ hochwertig und zeichnet sich durch ein ausgezeichnetes Preisleistungsverhältnis aus. Alle Lucaffé Kaffeesorten werden langsam und schonend in der Drehtrommel geröstet. Das typisch italienische Röstverfahren wird mit ausgewählten Aromen in Verbindung gebracht. Die harten Bitterstoffe werden dem Kaffee durch die dunkle Röstung entzogen, was den Kaffee sehr schmackhaft und cremig macht. Eine weitere Eigenschaft des Kaffees von Lucaffé ist das leicht schokoladige Aroma mit feinen Nuancen. Die hochwertigen Kaffeebohnen kommen aus Mittel-, Südamerika und Indien.</p>', 'https://www.roastmarket.de/lucaffe-mamma-lucia-bohnen-1kg.html', 32),
(33, '„DER PATE“', '<h4>Kurzbeschreibung</h4><ul><li>Kräftiger italienischer Kaffee</li><li>Besteht zu 60% aus Arabica-und zu 40% Robusta-Bohnen</li><li>Überzeugt durch würzigen und zugleich süßen Geschmack</li><li>Sehr weiche Säure mit toller Crema</li><li>Perfekte Zubereitung in Mokka, Siebträgermaschinen oder im Vollautomaten</li></ul><h4>Produktbeschreibung</h4><p>Der Kaffee „DER PATE“ von Lucaffé ist ein original italienischer Espresso, welcher zu 40% aus feinsten Arabica-Bohnen und zu 60 % aus Robusta-Bohnen besteht. Die gelungene Mischung aus dem Jahr 2015 ist speziell für den deutschen Markt konzipiert und besticht durch seinen würzigen und zugleich sehr ausbalancierten Geschmack mit toller stabiler Crema. Zudem ist die 1 kg Verpackung dieses Lucaffés besonders benutzerfreundlich und besitzt ein außergewöhnliches Design. Alle Lucaffé Kaffeesorten werden langsam und schonend in der Drehtrommel geröstet. Durch das typisch italienische Röstverfahren können sich die ausgewählten Aromen perfekt entfalten. Der Espresso ist sowohl für die Zubereitung in Siebträgermaschinen als auch für Vollautomaten geeignet.</p>', 'https://www.roastmarket.de/lucaffe-der-pate-bohnen-1kg.html', 33),

-- Sonstige Kaffee
(34, 'Berliner Frühstückskaffee', '<h4>Kurzbeschreibung</h4><ul><li>Einzigartige Kaffeekomposition feinster Arabicabohnen</li><li>Rohbohnen aus Nicaragua, Äthiopien sowie Kolumbien</li><li>Kräftiger, komplexer Kaffeegenuss</li><li>Der perfekte Frühstückskaffee</li><li>Zubereitung für Siebträger, Vollautomaten oder French Press empfohlen</li></ul><h4>Produktbeschreibung</h4><p>Der Berliner Frühstückskaffee der Berliner Kaffeerösterei ist eine einzigartige Kaffeemischung aus feinsten Arabicabohnen. Die Rohbohnen stammen aus Nicaragua, Äthiopien sowie Kolumbien und bieten in ihrer Komposition einen kräftigen und komplexen Kaffeegenuss. Aus diesem Grund eignet sich der Berliner Frühstückskaffee perfekt für den optimalen Start in den Tag. Aufgrund seines mittleren Röstgrads ist dieser Kaffee eine besonders harmonische Komposition. Die Zubereitung des Berliner Frühstückskaffees wird für Siebträger, Vollautomaten, als Filterkaffee sowie French Press empfohlen. Die Berliner Kaffeerösterei bietet seit fast 20 Jahren einzigartige Kaffeemischungen aus aller Welt an. Sie wurde bereits mehrmals vom „Der Feinschmecker“ Magazin ausgezeichnet. Des Weiteren ist sie Gründungsmitglied der Deutschen Röstergilde und garantiert eine traditionelle Kaffeeröstung sowie nachhaltigen und fairen Kaffeeanbau.</p>', 'https://www.roastmarket.de/berliner-kaffeeroesterei-berliner-fruehstueckskaffee.html', 34),
(35, 'Illy Espresso Entkoffeiniert gemahlen', '<h4>Kurzbeschreibung</h4><ul><li>Gemahlene entkoffeinierte Bohnen aus 100% feinsten Arabicabohnen aus dem mittel- und südamerikanischen Hochland sowie Afrika und Indien</li><li>Ausgewogene Aromen mit Noten von Schokolade und Karamell sowie einer feinporigen Crema</li><li>Koffeingehalt von unter 0,1 %</li><li>Perfekt für Siebträger und Espressokocher geeignet</li><li>In der 250g-Packung</li></ul><h4>Produktbeschreibung</h4><p>Der entkoffeinierte Espresso von Illy behält den unverwechselbaren Geschmack und das Aroma aus der typischen Komposition aus neun edlen Arabica-Sorten bei. Denn auch hier werden nur die besten Arabicabohnen aus dem mittel- und südamerikanischen Hochland sowie Afrika und Indien verwendet. Nach der Röstung und der Entkoffeinierung bleibt der Geschmack dennoch gleich. Er ist vollmundig elegant und ausgewogen. Aromen von Schokolade und Karamell machen ihn zu einem unvergleichlichen Erlebnis. Eine feinporige, braune Crema überzieht den Espresso und macht den ersten Schluck zum besonderen Genuss. In einer Packung sind 250 Gramm gemahlene Bohnen enthalten, welche perfekt für den Siebträger oder den Espressokocher geeignet sind. Die Erfahrung und Leidenschaften von fast 80 Jahren Familien-, Kaffee- und Unternehmensgeschichte legen den Ursprung für den Erfolg der italienischen Rösterei Illy.</p>', 'https://www.roastmarket.de/illy-espresso-entkoffeiniert-gemahlen-250g.html', 35)


Attributes
1  -  Ja
2  -  Nein

3  -  Helle Röstung
4  -  Mittlere Röstung
5  -  Dunkle Röstung

6  -  Fruchtig
7  -  Säuerlich
8  -  Würzig
9  -  Süß

10 -  French Press
11 -  Espressomaschine
12 -  Vollautomat
13 -  Aeropress
14 -  Chemex
15 -  Handfilter

16 -  Bohne
17 -  Gemahlen



drop table shop_product_attributevalue

create table shop_product_attributevalue (
	product_id int,
	attributevalue_id int,
	primary key (product_id, attributevalue_id)
	);

insert into shop_product_attributevalue (product_id, attributevalue_id) values
-- Bohne oder Gemahlen --> 16 oder 17
(1, 16),
(2, 16),
(3, 16),
(4, 16),
(5, 16),
(6, 16),
(7, 16),
(8, 16),
(9, 16),
(10, 16),
(11, 16),
(12, 17),
(13, 17),
(14, 17),
(15, 16),
(16, 16),
(17, 16),
(18, 16),
(19, 16),
(20, 16),
(21, 16),
(22, 16),
(23, 16),
(24, 16),
(25, 16),
(26, 16),
(27, 16),
(28, 16),
(28, 17),
(29, 16),
(29, 17),
(30, 16),
(30, 17),
(31, 16),
(32, 16),
(33, 16),
(34, 16),
(34, 17),
(35, 17)





insert into shop_product_attributevalue (product_id, attributevalue_id) values
-- Koffein
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 2),
(17, 1),
(18, 1),
(19, 1),
(20, 2),
(21, 2),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 2),
(35, 2)


insert into shop_product_attributevalue (product_id, attributevalue_id) values
-- Röstgrad
(1, 4),
(1, 5),
(2, 4),
(3, 4),
(3, 5),
(4, 4),
(5, 3),
(5, 4),
(6, 3),
(6, 4),
(7, 3),
(7, 4),
(8, 3),
(8, 4),
(9, 3),
(9, 4),
(10, 4),
(10, 5),
(11, 3),
(11, 4),
(12, 3),
(12, 4),
(13, 3),
(13, 4),
(14, 3),
(14, 4),
(15, 3),
(15, 4),
(16, 3),
(16, 4),
(16, 5),
(17, 4),
(17, 5),
(18, 4),
(18, 5),
(19, 4),
(19, 5),
(20, 3),
(20, 4),
(21, 3),
(21, 4),
(22, 3),
(22, 4),
(23, 3),
(23, 4),
(24, 4),
(24, 5),
(25, 4),
(25, 5),
(26, 4),
(26, 5),
(27, 4),
(27, 5),
(28, 4),
(28, 5),
(29, 3),
(29, 4),
(30, 4),
(30, 5),
(31, 3),
(31, 4),
(32, 4),
(32, 5),
(33, 4),
(33, 5),
(34, 3),
(34, 4),
(35, 3),
(35, 4),
(35, 5)



-- Geschmack
insert into shop_product_attributevalue (product_id, attributevalue_id) values
(1, 7),
(1, 8),
(1, 9),

(2, 6),
(2, 7),
(2, 8),

(3, 6),
(3, 7),
(3, 8),

(4, 6),
(4, 7),
(4, 8),

(5, 6),
(5, 7),
(5, 8),

(6, 6),
(6, 7),
(6, 8),

(7, 6),
(7, 7),
(7, 8),

(8, 6),
(8, 7),
(8, 8),

(9, 6),
(9, 7),
(9, 8),

(10, 6),
(10, 7),
(10, 8),

(11, 6),
(11, 7),
(11, 8),

(12, 6),
(12, 7),
(12, 8),

(13, 6),
(13, 7),
(13, 8),

(14, 7),
(14, 8),
(14, 9),

(15, 7),
(15, 8),
(15, 9),

(16, 6),
(16, 7),
(16, 8),
(16, 9),

(17, 7),
(17, 8),
(17, 9),

(18, 7),
(18, 8),
(18, 9),

(19, 7),
(19, 8),
(19, 9),

(20, 7),
(20, 8),
(20, 9),

(21, 7),
(21, 8),
(21, 9),

(22, 7),
(22, 8),
(22, 9),

(23, 7),
(23, 8),
(23, 9),

(24, 7),
(24, 8),
(24, 9),

(25, 7),
(25, 8),
(25, 9),

(26, 7),
(26, 8),
(26, 9),

(27, 7),
(27, 8),
(27, 9),

(28, 7),
(28, 8),
(28, 9),

(29, 7),
(29, 8),
(29, 9),

(30, 6),
(30, 7),
(30, 8),

(31, 6),
(31, 7),
(31, 8),

(32, 6),
(32, 7),
(32, 8),

(33, 6),
(33, 7),
(33, 8),

(34, 6),
(34, 7),
(34, 8),

(35, 6),
(35, 7),
(35, 8),
(35, 9)

-- Zubereitungsart
insert into shop_product_attributevalue (product_id, attributevalue_id) values
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),

(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),


(3, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15),


(4, 10),
(4, 11),
(4, 12),
(4, 13),
(4, 14),
(4, 15),


(5, 10),
(5, 11),
(5, 12),
(5, 13),
(5, 14),
(5, 15),


(6, 10),
(6, 11),
(6, 12),
(6, 13),
(6, 14),
(6, 15),


(7, 10),
(7, 11),
(7, 12),
(7, 13),
(7, 14),
(7, 15),

(8, 10),
(8, 11),
(8, 12),
(8, 13),
(8, 14),
(8, 15),


(9, 10),
(9, 11),
(9, 12),
(9, 13),
(9, 14),
(9, 15),


(10, 10),
(10, 11),
(10, 12),
(10, 13),
(10, 14),
(10, 15),


(11, 10),
(11, 11),
(11, 12),
(11, 13),
(11, 14),
(11, 15),


(12, 10),
(12, 11),
(12, 12),
(12, 13),
(12, 14),
(12, 15),


(13, 10),
(13, 11),
(13, 12),
(13, 13),
(13, 14),
(13, 15),

(14, 10),
(14, 11),
(14, 12),
(14, 13),
(14, 14),
(14, 15),


(15, 10),
(15, 11),
(15, 12),
(15, 13),
(15, 14),
(15, 15),


(16, 10),
(16, 11),
(16, 12),
(16, 13),
(16, 14),
(16, 15),


(17, 10),
(17, 11),
(17, 12),
(17, 13),
(17, 14),
(17, 15),


(18, 10),
(18, 11),
(18, 12),
(18, 13),
(18, 14),
(18, 15),


(19, 10),
(19, 11),
(19, 12),
(19, 13),
(19, 14),
(19, 15),

(20, 10),
(20, 11),
(20, 12),
(20, 13),
(20, 14),
(20, 15),


(21, 10),
(21, 11),
(21, 12),
(21, 13),
(21, 14),
(21, 15),


(22, 10),
(22, 11),
(22, 12),
(22, 13),
(22, 14),
(22, 15),


(23, 10),
(23, 11),
(23, 12),
(23, 13),
(23, 14),
(23, 15),


(24, 10),
(24, 11),
(24, 12),
(24, 13),
(24, 14),
(24, 15),


(25, 10),
(25, 11),
(25, 12),
(25, 13),
(25, 14),
(25, 15),

(26, 10),
(26, 11),
(26, 12),
(26, 13),
(26, 14),
(26, 15),


(27, 10),
(27, 11),
(27, 12),
(27, 13),
(27, 14),
(27, 15),


(28, 10),
(28, 11),
(28, 12),
(28, 13),
(28, 14),
(28, 15),


(29, 10),
(29, 11),
(29, 12),
(29, 13),
(29, 14),
(29, 15),


(30, 10),
(30, 11),
(30, 12),
(30, 13),
(30, 14),
(30, 15),

(31, 10),
(31, 11),
(31, 12),
(31, 13),
(31, 14),
(31, 15),

(32, 10),
(32, 11),
(32, 12),
(32, 13),
(32, 14),
(32, 15),

(33, 10),
(33, 11),
(33, 12),
(33, 13),
(33, 14),
(33, 15),

(34, 10),
(34, 11),
(34, 12),
(34, 13),
(34, 14),
(34, 15),

(35, 10),
(35, 11),
(35, 12),
(35, 13),
(35, 14),
(35, 15)