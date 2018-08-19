<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\Source;

class SourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Source::class, 10)->create();

        $sources = [
            ['source' => 'Marco Castori, e. a. (2017). A Framework for the Classification of Joint Hypermobility an Related Conditions. American Journal of Medical Genetics Part C (Seminars in Medical Genetics), 175C: 148-157.', 'disease_id' => 2],
            ['source' => 'Fransiska Malfait, e. a. (2017). The 2017 International Classification of the Ehler-Danlos Syndromes. American Journal of Medical Genetics Part C (Seminars in Medical Genetics), 175C: 8-26.', 'disease_id' => 3 ],
            ['source' => 'Rorbach M SH, e. a. (2013). ZNF469 frequently mutated in the brittle cornea syndrome (BCS) is a single exon gene possibly regulating the expression of several extracellular matrix componentes. Mol Genet Metab, 109:289-295.', 'disease_id' => 3],

        ];

        Source::insert($sources);

        $sources = [
            ['source' => 'Aresh Hashemi-Nejad, I. V. (2016). Ortopaedic surgery in hypermobile Ehlers-Danlos syndrome and hypermoblity spectrum disorders.', 'symptom_id' => 1],
            ['source' => 'Camerota, e. a. (2010). Neuropathic pain is a common feature in Ehlers-Danlos syndrome. Letters, 41 (1), e2-e4.', 'symptom_id' => 1],
            ['source' => 'Castori, e. a. (2010). Natural history and manifestations of the hypermobility type Ehlers–Danlos syndrome: A pilot study on 21 patients. American Journal of Medical Genetics Part A, 152A(3), 556-564.', 'symptom_id' => 1],
            ['source' => 'Levy, H. (2004). Ehlers-Danlos syndrome, hypermobility type. Seattle: GeneReviews.', 'symptom_id' => 1],
            ['source' => 'Rombaut, e. a. (2010). Musculoskeletal complaints, physical activity and healt-related quality of life among patiennts with the Ehlers-Danlos syndrome hypermobility type. Disability and Rehabilitation, 1339–1345.', 'symptom_id' => 1],
            ['source' => 'Sacheti, e. a. (1997). Chronic pain is a manifestation of the Ehlers-Danlos syndrome. Journal of Pain and Symptom Management, 14 (2), 88-93.', 'symptom_id' => 1],
            ['source' => 'Voermans, e. a. (2010). Pain in Ehlers-Danlos syndrome is common, severe and associated with functional impairment. Journal of Pain and Symptom Management, 40 (3), 370-378.', 'symptom_id' => 1],
   
            ['source' => 'Cagnie B., D. C. (2008). Oefentherapie bij nekaandoeningen. Antwerpen: Standaard Uitgeverij.', 'symptom_id' => 2],
            ['source' => 'Daniele Cazzato, e. a. (2016). Small fiber neuropathy is a common feature of Ehlers-Danlos syndromes. Neurology, 87(2): 155-159.', 'symptom_id' => 2],
            ['source' => 'Mantle, D., Wilkins, R. M., & Preedy, V. (2005). A novel therapeutic strategy for Ehlers-Dantos syndrome based on nutritional supplements. medical hypotheses, vol. 64, no. 2, pp. 279 - 283.', 'symptom_id' => 2],
            ['source' => 'Sahin N., e. a. (may 2008). Isokinetic evaluation of knee extensor/flexor muscle strength in patients with hypermobility syndrome. Reumatology international, 28 (7), 643-648.', 'symptom_id' => 2],

            ['source' => 'Holly A. Clayton, e. a. (2013). Proprioceptive sensitivity in Ehlers-Danlos syndrome patients. Exp Brain Res, 230:311–321.', 'symptom_id' => 3],
            ['source' => 'Malik A.K., e. a. (1994, juli). Impaired proprioceptive acuity at the proximal interphalangeal joint in patients with the hypermobility syndrome. British journal of rheumatology, pp. 33 (7), 631-637.', 'symptom_id' => 3],
            ['source' => 'Rombaut L., e. a. (2011). Balance, gait, falls, and fear of falling in women with the hypermobility type of Ehlers-Danlos syndrome. Hoboken: Arthritis Care & Research.', 'symptom_id' => 3],
   
            ['source' => 'Malik A.K., e. a. (1994, juli). Impaired proprioceptive acuity at the proximal interphalangeal joint in patients with the hypermobility syndrome. British journal of rheumatology, pp. 33 (7), 631-637.', 'symptom_id' => 4],
            ['source' => 'Rombaut L, M. F. (2012). Muscle mass, muscle strength, functional performance, and physical impairment in women with the hypermobility type of Ehlers-Danlos syndrome. Hoboken: Arthritis Care & Researche.', 'symptom_id' => 4],
            ['source' => 'Rombaut, e. a. (2010). Musculoskeletal complaints, physical activity and healt-related quality of life among patiennts with the Ehlers-Danlos syndrome hypermobility type. Disability and Rehabilitation, 1339–1345.', 'symptom_id' => 4],
            ['source' => 'Sahin N., e. a. (2008, may). Isokinetic evaluation of knee extensor/flexor muscle strength in patients with hypermobility syndrome. Rheumatology international, pp. 28 (7), 643-648.', 'symptom_id' => 4],
            ['source' => 'Voermans NC, e. a. (2009). Neuromusculair involvement in various types of Ehlers-Danlos sindromes. Annals of neurology, 65(6):687-697.', 'symptom_id' => 4],
            
            ['source' => 'Atzinger CL, e. a. (2011). Cross-sectional and longitudinal assessment of aortic root dilation and valvular anomalies in hypermobile and classic Ehlers-Danlos syndrome. J Pediatr, 58:826-830.e1.', 'symptom_id' => 6],
            ['source' => 'Callewaert B., M. F. (2008). Ehlers-Danlos syndromes and Marfan syndrome. Best Practice & Research Clinical Rheumatology, 22(1), 165-189.', 'symptom_id' => 6],
            ['source' => 'Castori, e. a. (2010). Natural history and manifestations of the hypermobility type Ehlers–Danlos syndrome: A pilot study on 21 patients. American Journal of Medical Genetics Part A, 152A(3), 556-564.', 'symptom_id' => 6],
            ['source' => 'Hakim A., e. a. (2017). Cardiovascular autonomic dysfunction in Ehlers-Danlos syndrome-Hypermobile type. Am J Med Genet C Semin Med Genet., 175(1):168-174.', 'symptom_id' => 6],
            ['source' => 'Jiang S., e. a. (2012). Successful surgical treatment of intramural aortoatrial fistula, severe aortic regurgitation, mitral prolapse, and tricuspid insufficiency in a patient with Ehlers-Danlos syndrome type IV. Heart Surg Forum, 15:E156-7.', 'symptom_id' => 6],
            ['source' => 'Levy, H. (2004). Ehlers-Danlos syndrome, hypermobility type. Seattle: GeneReviews.', 'symptom_id' => 6],
            ['source' => 'McDonnell NB, e. a. (2006). Echocardiographic findings in classical and hypermobile Ehlers-Danlos syndromes. Am J Med Genet A, 140:129-36.', 'symptom_id' => 6],
            ['source' => 'Rowe, e. a. (1999). Orthostatic intolerance and chronic fatigue syndrome associated with Ehlers-Danlos syndrome. The Journal of Pediatrics, 135 (4), 494–499.', 'symptom_id' => 6],
            ['source' => 'Wenstrup RJ, e. a. (2000). Prevalence of aortic root dilation in the Ehlers-. Genet Med, 4:112-7.', 'symptom_id' => 6],
           
            ['source' => 'Bradley, J. &. (2003). Orthostatic Hypotension. American Family Physician, 68(12); 2393-2398.', 'symptom_id' => 7],
            ['source' => 'Farquhar, e. a. (2000). Abnormal baroreflex responses in patients with idiopathic orthostatic intolerance. Circulation 102(25), 3086-3091.', 'symptom_id' => 7],
            ['source' => 'Gazit, e. a. (2003). Dysautonomia in the joint hypermobility. The American Journal of Medicine 115(1), 33-40.', 'symptom_id' => 7],
            ['source' => 'Hakim, A. &. (2004). Non-musculoskeletal symptoms in join thypermobility syndrome. Indirect evidence for autonomic dysfunction? Rheumatology, 43(9), 1194-1195.', 'symptom_id' => 7],
            ['source' => 'Newton, e. a. (2007). Symptoms of autonomic dysfunction in chronic fatigue syndrome. QJM, 100(8), 519-526.', 'symptom_id' => 7],
            ['source' => 'Rombaut, e. a. (2010). Musculoskeletal complaints, physical activity and healt-related quality of life among patiennts with the Ehlers-Danlos syndrome hypermobility type. Disability and Rehabilitation, 1339–1345.', 'symptom_id' => 7],
            ['source' => 'Rowe, e. a. (1999). Orthostatic intolerance and chronic fatigue syndrome associated with Ehlers-Danlos syndrome. The Journal of Pediatrics, 135 (4), 494–499.', 'symptom_id' => 7],
            
            ['source' => 'Bradley, &. A. (1999). Is Chiari malformation associated with increased levels of substance P and clinical symptoms in persons with fibromyalgia? Arthritis & Rheumatism,42(12), 2731-2736.', 'symptom_id' => 8],
            ['source' => 'Chalaye, e. a. (2012). Comparing pain modulation and autonomic responses in fibromyalgia and irritable bowel syndrome patients. Journal of Clinical Pain, 28(6), 519-526.', 'symptom_id' => 8],
            ['source' => 'Chen, e. a. (1988). Nerves accompanying the vertebral artery and their clinical relevance. Spine, 13(12), 1360-1364.', 'symptom_id' => 8],
            ['source' => 'Freeman, e. a. (2011). Consensus statement on the definition of orthostatic hypotension, neurally mediated syncope and the postural tachycardia syndrome. Autonomic Neuroscience, 161(1􀀁2), 44-48.', 'symptom_id' => 8],
            ['source' => 'Holman, A. (2008). Positional cervical spinal cord compression and fibromyalgia: anovel comorbidity with important diagnostic and treatment implications. Journal of Pain, 9(7), 613-622.', 'symptom_id' => 8],
            ['source' => 'Martinez-Lavin, e. a. (2007). Biology and therapy of fibromyalgia. Stress, the stress response system,and fibromyalgia. Arthritis Research & Therapy, 9(4), 216.', 'symptom_id' => 8],
            ['source' => 'Rowe, e. a. (1999). Orthostatic intolerance and chronic fatigue syndrome associated with Ehlers-Danlos syndrome. The Journal of Pediatrics, 135 (4), 494–499.', 'symptom_id' => 8],
            
            ['source' => 'Bradley, J. &. (2003). Orthostatic Hypotension. American Family Physician, 68(12); 2393-2398', 'symptom_id' => 9],
            ['source' => 'Callewaert B., M. F. (2008). Ehlers-Danlos syndromes and Marfan syndrome. Best Practice & Research Clinical Rheumatology, 22(1), 165-189.', 'symptom_id' => 9],
            ['source' => 'Castori, e. a. (2010). Natural history and manifestations of the hypermobility type Ehlers–Danlos syndrome: A pilot study on 21 patients. American Journal of Medical Genetics Part A, 152A(3), 556-564.', 'symptom_id' => 9],
            ['source' => 'Cohen, e. a. (2000). Autonomic Dysfunction in Patients With Fibromyalgie: Application of Power Spectral Analysis of Heart Rate Variability. Seminars in Arthritis and Rheumatism, 29 (4),217-227.', 'symptom_id' => 9],
            ['source' => 'Jansen, J. (2005). Maag-darmafwijkingen bij het Ehlers-Danlos syndroom. Ehlers-Danlos sydroom, een multi-disciplinaire benadering, hfdst 8, 85-93.', 'symptom_id' => 9],
            ['source' => 'Levy, e. a. (1999). Gastroesophageal reflus and irritable bowel syndrome in classical and hypermobile Ehlers Danlos syndrome (EDS). American Journal of Human Genetics, 65, A69.', 'symptom_id' => 9],
            ['source' => 'Levy, H. (2004). Ehlers-Danlos syndrome, hypermobility type. Seattle: GeneReviews.', 'symptom_id' => 9],
            ['source' => 'Lind, J. &. (2002). PAreshregnancy and the Ehlers–Danlos syndrome: a retrospective study in a Dutch population. Acta Obsretricia et Gynecologica Scandinavica, 81(4),293-300.', 'symptom_id' => 9],
            ['source' => 'Rombaut, e. a. (2010). Musculoskeletal complaints, physical activity and healt-related quality of life among patiennts with the Ehlers-Danlos syndrome hypermobility type. Disability and Rehabilitation, 1339–1345.', 'symptom_id' => 9],
            
            ['source' => 'Eecken H van der, e. a. (2002). Major intraabdominal complications following extracorporeal schockwave lithotripsy (ESWL) in a patient with Ehlers-Danlos syndrome. Eur Urol, 42:635-6.', 'symptom_id' => 10],
            ['source' => 'Hakim, A. (2013, June 9). Info & Advice. Opgehaald van hypermobility.org: http://hypermobility.org/help-advice/the-bladder-pelvic-floor/', 'symptom_id' => 10],
            ['source' => 'Kort I.M. de, e. a. (2003). Lower urinary tract dysfunction in children with generalized hypermobility of joints. J Urol, 170:1971-4.', 'symptom_id' => 10],
            ['source' => 'Lock, M. (2005). Urologische aspecten van het Ehlers-Danlos syndroom. In e. a. J.W.G. Jacobs, Ehlers-Danlos syndroom Een multidisciplinaire benadering (pp. hfdst. 17: 165-169). Amsterdam: Uitgeverij Boom.', 'symptom_id' => 10],
            ['source' => 'Mauseth R., e. a. (1977). Infantile polycystic disease of het kidneys and Ehlers-Danlos syndrome in an 11-year-old patient. J Pediatr, 90:81-3.', 'symptom_id' => 10],
            ['source' => 'McIntosc, e. a. (1996). Ehlers-Danlos syndrome: relationship between joint hypermobility, urinary incontinence, and pelvic floor prolapse. Gynecol Obstet Invest, 41:135-9.', 'symptom_id' => 10],

            ['source' => 'Castori, e. a. (2010). Natural history and manifestations of the hypermobility type Ehlers–Danlos syndrome: A pilot study on 21 patients. American Journal of Medical Genetics Part A, 152A(3), 556-564.', 'symptom_id' => 11],
            ['source' => 'Castori, e. a. (2011). Chronic fatigue syndrome is commonly diagnosed in patients with Ehlers- Danlos syndrome/hypermobility type/joint hypermobility syndrome. Clinical and Experimental Rheumatology 29(3), 597-598.', 'symptom_id' => 11],
            ['source' => 'Hagen, K. (1996). Understanding Ehlers-Danlos syndrome. Dermatology Nursing, 5 (6), 431-434.', 'symptom_id' => 11],
            ['source' => 'Inge De Wandele, e. a. (2016). Orthostatic intolerance and fatigue in the hypermobility type of Ehlers-Danlos Syndrome. Rheumatology 55(8), 1412-1420.', 'symptom_id' => 11],
            ['source' => 'R. Geenen, e. a. (2005). Ehlers-Danlos syndroom: lichamelijke problemen, emoties en sociale gevolgen. In J. Jacobs, Ehlers-Danlos syndroom. Een multidisciplinaire benadering (pp. hfdst 20: 189-200). Amsterdam: Uitgeverij Boom.', 'symptom_id' => 11],
            ['source' => 'Rombaut L., e. a. (2011). Impairment and impact of pain in female patients with Ehlers-Danlos syndrome: a comparative study with fibromyalgia and rheumatoid arthritis. Arthritis and rheumatism 63 (7), 1979-1987.', 'symptom_id' => 11],
            ['source' => 'Voermans, e. a. (2010). Fatigue is a frequent and clinically relevant problem in Ehlers-Danlos Syndrome. Seminars in Arthritis and Rheumatism 40 (3, 267-274.', 'symptom_id' => 11],
            ['source' => 'Voermans, e. a. (2010). Pain in Ehlers-Danlos syndrome is common, severe and associated with functional impairment. Journal of Pain and Symptom Management, 40 (3), 370-378.', 'symptom_id' => 11],
         
        ];


        //symptom_id
        Source::insert($sources);





    }

}
